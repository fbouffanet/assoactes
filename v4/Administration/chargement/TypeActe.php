<?php

class TypeActe {
  private static $typeActe;
  private $a_type_acte;
  protected $connexionBD;
  private $a_idf_par_type_acte;
   
  private function __construct ($pconnexionBD) {
      $this->connexionBD = $pconnexionBD;
      $this->a_type_acte = array();
      $this->a_idf_par_type_acte = null;  
  }
   
  public static function singleton($pconnexionBD) {
     if (!isset(self::$typeActe)) {
            $c = __CLASS__;
            self::$typeActe = new $c($pconnexionBD);
     }
     return self::$typeActe;
  }
  
  public function ajoute($pst_type_acte,$pst_sigle_acte) {
     if ($pst_type_acte !='' && !array_key_exists(strval($pst_type_acte),$this->a_type_acte ))
         $this->a_type_acte[strval($pst_type_acte)]= $pst_sigle_acte;
  }
  
  public function sauve($pst_rep_tmp,$pst_parametres_load_data) {
     global $gst_jeu_de_caracteres_par_defaut;
     $st_fich_temp = tempnam ($pst_rep_tmp, "type_acte.csv");
     $pf=@fopen($st_fich_temp,"w");
     if ($pf===FALSE)
        throw new Exception("Ecriture fichier type_acte.csv impossible");
     foreach ($this->a_type_acte as $st_type_acte => $st_sigle )
     {
       fwrite($pf,"$st_type_acte;$st_sigle\n");
     }
     fclose($pf);
     usleep(500000);
     chmod($st_fich_temp,0444);
     usleep(500000);
     $st_fich_temp=addslashes($st_fich_temp);
     $st_requete="LOAD DATA $pst_parametres_load_data INFILE '$st_fich_temp' IGNORE INTO TABLE `type_acte` CHARACTER SET $gst_jeu_de_caracteres_par_defaut FIELDS TERMINATED BY '\;' OPTIONALLY ENCLOSED BY '\"' LINES TERMINATED BY '\n' (nom,sigle_nimegue)";
     try
     {
       $this->connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       unlink($st_fich_temp);
       die('Sauvegarde type_acte impossible: ' . $e->getMessage().": $st_requete ($st_fich_temp)");
     }   
     unlink($st_fich_temp);
   }
   
   public function charge_liste_idf_par_nom() {
     $this->a_idf_par_type_acte = $this->connexionBD->liste_clef_par_valeur("select idf,nom from `type_acte`");
   }
   
   public function vers_idf($pst_nom) {
     if (is_null($pst_nom)) return null;
     $this->charge_liste_idf_par_nom();
     if (is_null($this->a_idf_par_type_acte==null)) $this->charge_liste_idf_par_nom();
     if (array_key_exists(strval($pst_nom),$this->a_idf_par_type_acte))
        return $this->a_idf_par_type_acte[strval($pst_nom)];
     else
        return -1;   
   }
}

?>
