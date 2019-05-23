<?php

class Profession {
  private static $profession;
  private $a_profession;
  protected $connexionBD;
  private $a_idf_par_profession;
   
  private function __construct ($pconnexionBD) {
      $this->connexionBD = $pconnexionBD;
      $this->a_profession = array();
      $this->a_idf_par_profession = null;  
  }
   
  public static function singleton($pconnexionBD) {
     if (!isset(self::$profession)) {
            $c = __CLASS__;
            self::$profession = new $c($pconnexionBD);
     }
     return self::$profession;
  }
  
  public function ajoute($pst_profession) {
     $pst_profession = ucfirst(strtolower(trim($pst_profession)));
     if ($pst_profession !='' && !in_array(strval($pst_profession),$this->a_profession ))
         $this->a_profession[]=strval($pst_profession);
  }
  
  public function sauve($pst_rep_tmp,$pst_parametres_load_data) {
     global $gst_jeu_de_caracteres_par_defaut;
     $st_fich_temp = tempnam ($pst_rep_tmp, "profession.csv");
     $pf=@fopen($st_fich_temp,"w");
     if ($pf===FALSE)
        throw new Exception("Ecriture fichier profession.csv impossible");
     foreach ($this->a_profession as $st_elem)
     {
       fwrite($pf,"$st_elem\n");
     }
     fclose($pf);
     usleep(500000);
     chmod($st_fich_temp,0444);
     $st_fich_temp=addslashes($st_fich_temp);
     $st_requete="LOAD DATA $pst_parametres_load_data INFILE '$st_fich_temp' IGNORE INTO TABLE `profession` CHARACTER SET $gst_jeu_de_caracteres_par_defaut LINES TERMINATED BY '\n' (nom)";
     try
     {
       $this->connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       unlink($st_fich_temp);
       die('Sauvegarde profession impossible: ' . $e->getMessage());
     }   
     unlink($st_fich_temp);
   }
   
   public function charge_liste_idf_par_nom() {
     if (is_null($this->a_idf_par_profession))
        $this->a_idf_par_profession = $this->connexionBD->liste_clef_par_valeur("select idf,nom from `profession`");
   }
   
   public function vers_idf($pst_nom) {
     $pst_nom = ucfirst(strtolower(trim($pst_nom)));
     if (empty($pst_nom)) return 0;
     if (is_null($this->a_idf_par_profession)) $this->charge_liste_idf_par_nom();
     if (array_key_exists(strval($pst_nom),$this->a_idf_par_profession))
        return $this->a_idf_par_profession[strval($pst_nom)];
     else
     {
        return 65535; // Max de Smallint => Marqueur pour détecter les erreurs éventuelles
     }      
   }
}

?>
