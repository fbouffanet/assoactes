<?php

class Prenom {
  private static $prenom;
  private $a_prenom;
  protected $connexionBD;
  private $a_idf_par_prenom;
   
  private function __construct ($pconnexionBD) {
      $this->connexionBD = $pconnexionBD;
      $this->a_prenom = array();
      $this->a_idf_par_prenom = null;
  }
   
  public static function singleton($pconnexionBD) {
     if (!isset(self::$prenom)) {
            $c = __CLASS__;
            self::$prenom = new $c($pconnexionBD);
     }
     return self::$prenom;
  }
  
  public function ajoute($pst_prenom) {
     $pst_prenom = trim($pst_prenom);
     if ($pst_prenom !='' && !in_array(strval($pst_prenom),$this->a_prenom))
     {       
        $this->a_prenom[]=strval($pst_prenom);
     }
  }
  
  public function sauve($pst_rep_tmp,$pst_parametres_load_data) {
     global $gst_jeu_de_caracteres_par_defaut;
     $st_fich_temp = tempnam ($pst_rep_tmp, "prenom.csv");
     $pf=@fopen($st_fich_temp,"w");
     if ($pf===FALSE)
        throw new Exception("Ecriture fichier prenom.csv impossible");
     foreach ($this->a_prenom as $st_prenom)
     {
       fwrite($pf,"$st_prenom\n");
     }
     fclose($pf);
     usleep(500000);
     chmod($st_fich_temp,0444);
     $st_fich_temp=addslashes($st_fich_temp);
     $st_requete="LOAD DATA $pst_parametres_load_data INFILE '$st_fich_temp' IGNORE INTO TABLE `prenom` CHARACTER SET $gst_jeu_de_caracteres_par_defaut fields terminated by '\;' LINES TERMINATED BY '\n' (libelle)";
     try
     {
       $this->connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       unlink($st_fich_temp);
       die('Sauvegarde prenom impossible: ' . $e->getMessage());
     }   
     unlink($st_fich_temp);
     $st_requete = "select idf,libelle from prenom left join groupe_prenoms on (idf=idf_prenom) where idf_prenom is null and libelle regexp('[ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿA-Za-z]+')"; 
     $a_prenoms= $this->connexionBD->liste_valeur_par_clef($st_requete);
     $a_prenoms=array_unique($a_prenoms);
     if (count($a_prenoms)>0)
     {        
        $st_requete = "select idf,libelle from prenom_simple";
        $a_prenoms_simples= $this->connexionBD->liste_clef_par_valeur($st_requete);

        $a_groupe_prenoms_avec_idf=array();
        $a_groupe_prenoms_sans_idf=array();

        foreach ($a_prenoms as $i_idf => $st_prenom)
        {
	         $a_champs = preg_split("/[,\s\/\=\&-]+/",$st_prenom);
           $a_champs = array_unique($a_champs);
	         foreach ($a_champs as $st_champ)
	         {
		          $st_champ = preg_replace("/[\"\'\(\)]+/",'',$st_champ);
              if (!empty($st_champ))
			           if (array_key_exists($st_champ,$a_prenoms_simples))
                    if (array_key_exists($i_idf,$a_groupe_prenoms_avec_idf))
                       $a_groupe_prenoms_avec_idf[$i_idf][]=$a_prenoms_simples[$st_champ];
                    else
                       $a_groupe_prenoms_avec_idf[$i_idf]=array($a_prenoms_simples[$st_champ]);
                 else
                    if (array_key_exists($i_idf,$a_groupe_prenoms_sans_idf))
                       $a_groupe_prenoms_sans_idf[$i_idf][]=$st_champ;
                    else
                       $a_groupe_prenoms_sans_idf[$i_idf]=array($st_champ);
	         }
        }
        if (count($a_groupe_prenoms_sans_idf)>0)
        {
           $st_fich_temp = tempnam ($pst_rep_tmp, "prenoms_simples.csv");
           $pf=@fopen($st_fich_temp,"w");
           if ($pf===FALSE)
              throw new Exception("Ecriture fichier prenoms_simples.csv impossible");
           $oPhonex = new phonex;
           // Masque les erreurs Notice d'offset de la classe Phonex
           error_reporting(E_ERROR | E_WARNING | E_PARSE);
           foreach($a_groupe_prenoms_sans_idf as $i_idf => $a_prenoms)
           {
              $oPhonex = new phonex;
              foreach ($a_prenoms as $st_prenom)
              { 
                 if (!empty($st_prenom))
                 {           
                    $oPhonex -> build ($st_prenom);
                    $sPhonex = $oPhonex -> sString;
                    fwrite($pf,"$st_prenom;$sPhonex\n");
                 }
              }
           }
           fclose($pf);
           usleep(500000);
           chmod($st_fich_temp,0444);
           $st_fich_temp=addslashes($st_fich_temp);

           //$st_requete = "LOAD $pst_parametres_load_data DATA INFILE '$st_nom_fich' IGNORE INTO TABLE prenom_simple CHARACTER SET latin1 FIELDS TERMINATED BY ';' LINES TERMINATED BY '\\n' (idf,libelle,phonex) ";
           $st_requete = "LOAD $pst_parametres_load_data DATA INFILE '$st_fich_temp' IGNORE INTO TABLE prenom_simple CHARACTER SET $gst_jeu_de_caracteres_par_defaut FIELDS TERMINATED BY ';' LINES TERMINATED BY '\\n' (libelle,phonex) ";
           $this->connexionBD->execute_requete($st_requete);

           $st_requete = "select idf,libelle from prenom_simple";
           $a_prenom_simples= $this->connexionBD->liste_clef_par_valeur($st_requete);

           foreach($a_groupe_prenoms_sans_idf as $i_idf => $a_prenoms)
           {
              foreach ($a_prenoms as $st_prenom)
              {
                 if (array_key_exists($st_prenom,$a_prenom_simples))
                 {
                    if (array_key_exists($i_idf,$a_groupe_prenoms_avec_idf))
                       $a_groupe_prenoms_avec_idf[$i_idf][]=$a_prenom_simples[$st_prenom];
                    else
                       $a_groupe_prenoms_avec_idf[$i_idf]=array($a_prenom_simples[$st_prenom]);
                 }
              }
           }
       }
       $st_fich_temp = tempnam ($pst_rep_tmp, "groupe_prenoms.csv");
       $pf=@fopen($st_fich_temp,"w");
       if ($pf===FALSE)
          throw new Exception("Ecriture fichier groupe_prenoms.csv impossible");
               
       foreach($a_groupe_prenoms_avec_idf as $i_idf_groupe => $a_idf_prenoms)
       {
          foreach ($a_idf_prenoms as $i_idf_prenom)
          {
             fwrite($pf,"$i_idf_groupe;$i_idf_prenom\n");
          }
       }
       fclose($pf);
       usleep(500000);
       chmod($st_fich_temp,0444);
       $st_fich_temp=addslashes($st_fich_temp);
       $st_requete = "LOAD $pst_parametres_load_data DATA  INFILE '$st_fich_temp' IGNORE INTO TABLE groupe_prenoms CHARACTER SET $gst_jeu_de_caracteres_par_defaut FIELDS TERMINATED BY ';' LINES TERMINATED BY '\\n' (idf_prenom,idf_prenom_simple) ";
       $this->connexionBD->execute_requete($st_requete);
     }
   }
   
   public function charge_liste_idf_par_nom() {
     if (is_null($this->a_idf_par_prenom))
        $this->a_idf_par_prenom = $this->connexionBD->liste_clef_par_valeur("select idf,libelle from `prenom`");
   }
   
   public function vers_idf($pst_nom) {
     if (empty($pst_nom)) return 0;
     if (is_null($this->a_idf_par_prenom)) $this->charge_liste_idf_par_nom();
     if (array_key_exists(strval($pst_nom),$this->a_idf_par_prenom))
        return $this->a_idf_par_prenom[strval($pst_nom)];
     else
     {
        return 16777215; // Max de Mediumint => Marqueur pour détecter les erreurs éventuelles  
     }      
   }
}

?>
