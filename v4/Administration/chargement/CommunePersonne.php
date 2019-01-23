<?php

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
   
   public function sauve($pst_rep_tmp,$pst_parametres_load_data) {
     global $gst_jeu_de_caracteres_par_defaut;
     $st_fich_temp = tempnam ($pst_rep_tmp, "commune_personne.csv");
     $pf=@fopen($st_fich_temp,"w");
     if ($pf===FALSE)
        throw new Exception("Ecriture fichier commune_personne.csv impossible");
     foreach ($this->a_commune as $st_elem)
     {
       fwrite($pf,"$st_elem\n");
     }
     fclose($pf);
     usleep(500000);
     chmod($st_fich_temp,0444);
     $st_fich_temp=addslashes($st_fich_temp);
     $st_requete="LOAD DATA $pst_parametres_load_data INFILE '$st_fich_temp' IGNORE INTO TABLE `commune_personne` CHARACTER SET $gst_jeu_de_caracteres_par_defaut LINES TERMINATED BY '\n' (nom)";
     try
     {
       $this->connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       unlink($st_fich_temp);
       die('Sauvegarde commune_personne impossible: ' . $e->getMessage().": $st_requete");
     }   
     unlink($st_fich_temp);
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
        return 16777215; // Max de Mediumint => Marqueur pour détecter les erreurs éventuelles  
   }
   
}

?>
