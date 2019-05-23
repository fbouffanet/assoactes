<?php

class Union {
   private static $union;
   private $a_union;
   protected $connexionBD;
   protected $type_acte;
   
   private function __construct ($pconnexionBD) {  
     $this->a_union= array();
     $this->connexionBD=$pconnexionBD;
     $this->type_acte = TypeActe::singleton($pconnexionBD);
   }
   
   public static function singleton ($pconnexionBD) {  
      if (!isset(self::$union)) {
            $c = __CLASS__;
            self::$union = new $c($pconnexionBD);
     }
     return self::$union;
   }
   
   public function ajoute ($pi_idf_source,$pi_idf_commune,$pi_idf_acte,$pst_type_acte,$pi_idf_epoux,$pst_nom_epoux,$pi_idf_epouse,$pst_nom_epouse) {
      $this->a_union[] = array($pi_idf_source,$pi_idf_commune,$pi_idf_acte,$pst_type_acte,$pi_idf_epoux,$pst_nom_epoux,$pi_idf_epouse,$pst_nom_epouse);
   }
   
   /**
   * @param string $pst_valeur valeur à convertir
   * @return string champ CSV  
   */     
   static function champ_csv($pst_valeur)
   {
      return is_null($pst_valeur) ? '\N' : "\"$pst_valeur\"";
   }

   /**
   * sauve la liste des unions en base   
   * @param string $pst_rep_tmp r‚pertoire temporaire à utiliser
   * @param string $pst_parametres_load_data options du load data
   * @global string $gst_jeu_de_caracteres_par_defaut jeu de caractères par défaut
   */              
   public function sauve($pst_rep_tmp,$pst_parametres_load_data)
   {
     global $gst_jeu_de_caracteres_par_defaut;
     $st_fich_temp = tempnam ($pst_rep_tmp, "union.csv");
     $pf=@fopen($st_fich_temp,"w");
     if ($pf===FALSE)
        throw new Exception("Ecriture fichier union.csv impossible");
     foreach ($this->a_union as $a_ligne )
     {
        list($i_idf_source,$i_idf_commune,$i_idf_acte,$st_type_acte,$i_idf_epoux,$st_nom_epoux,$i_idf_epouse,$st_nom_epouse) = $a_ligne;
        $st_ligne = join(';',array_map("Union::champ_csv",array($i_idf_source,$i_idf_commune,$i_idf_acte,$this->type_acte->vers_idf($st_type_acte),$i_idf_epoux,$st_nom_epoux,$i_idf_epouse,$st_nom_epouse)));
        fwrite($pf,"$st_ligne\n");
     }
     fclose($pf);
     usleep(500000);
     chmod($st_fich_temp,0444);
     $st_fich_temp=addslashes($st_fich_temp);
     $st_requete="LOAD DATA $pst_parametres_load_data INFILE '$st_fich_temp' INTO TABLE `union` CHARACTER SET $gst_jeu_de_caracteres_par_defaut FIELDS TERMINATED BY '\;' OPTIONALLY ENCLOSED BY '\"' LINES TERMINATED BY '\n' (idf_source,idf_commune,idf_acte,idf_type_acte,idf_epoux,patronyme_epoux,idf_epouse,patronyme_epouse)";
     try
     {
       $this->connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       unlink($st_fich_temp);
       die('Sauvegarde union impossible: ' . $e->getMessage());
     }  
     unlink($st_fich_temp);
   }
   
   /*
   * Crée une union dans la table Union
   * @param integer $pi_idf_source identifiant de la source
   * @param integer $pi_idf_commune identifiant de la commune
   * @param integer $pi_idf_acte identifiant de l'acte
   * @param integer $pi_idf_type_acte identifiant du type de l'acte
   * @param integer $pi_idf_epoux identifiant de l'époux
   * @param string  $pst_nom_epoux nom de l'époux
   * @param integer $pi_idf_epouse identifiant de l'épouse
   * @param string  $pst_nom_epouse nom de l'épouse
   */
   public function cree($pi_idf_source,$pi_idf_commune,$pi_idf_acte,$pi_idf_type_acte,$pi_idf_epoux,$pst_nom_epoux,$pi_idf_epouse,$pst_nom_epouse)
   {
      $this->connexionBD->initialise_params(array(':idf_source'=>$pi_idf_source,':idf_commune'=>$pi_idf_commune,':idf_acte'=>$pi_idf_acte,':idf_type_acte'=>$pi_idf_type_acte,':idf_epoux'=>$pi_idf_epoux,':nom_epoux'=>$pst_nom_epoux,':idf_epouse'=>$pi_idf_epouse,':nom_epouse'=>$pst_nom_epouse));
      $st_requete = "insert into `union`(idf_source,idf_commune,idf_acte ,idf_type_acte,idf_epoux,patronyme_epoux,idf_epouse,patronyme_epouse) values(:idf_source,:idf_commune,:idf_acte,:idf_type_acte,:idf_epoux,:nom_epoux,:idf_epouse,:nom_epouse)";
		  $this->connexionBD->execute_requete($st_requete); 
   }
}

?>
