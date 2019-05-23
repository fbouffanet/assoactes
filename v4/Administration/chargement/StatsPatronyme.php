<?php
class StatsPatronyme {
  protected $connexionBD;
  protected $i_idf_commune;
  protected $i_idf_type_acte;
  protected $i_idf_source;
  protected $a_stat;
  protected $type_acte;
  protected $a_type_acte;
  
  public function __construct($pconnexionBD,$pi_idf_commune,$pi_idf_source) {
       $this->connexionBD = $pconnexionBD;
       $this->i_idf_commune=$pi_idf_commune;
       $this->i_idf_source=$pi_idf_source;
       $this->type_acte = TypeActe::singleton($pconnexionBD);
       $this->a_type_acte = array();
       $this->a_stat=$this->connexionBD->liste_valeur_par_doubles_clefs("select  patronyme,ta.nom,annee_min,annee_max,nb_personnes from `stats_patronyme` join `type_acte` as ta on (stats_patronyme.idf_type_acte=ta.idf)  where idf_commune=$pi_idf_commune and idf_source=$pi_idf_source");
  }
   
  /**
  * Met à jour les date minimale et maximale en fonction de l'annee courante $pi_annee
  *
  * @param string $pi_annee annee courante
  * @param string $pi_annee_min ann‚e minimale jusqu'à présent
  * @param string $pi_annne_max ann‚e maximale jusqu'à présent
  * @return array(date_min, date_max)
  */

  private function annees_min_max($pi_annee,$pi_annee_min,$pi_annee_max)
  {
    if (($pi_annee != 9999) && ($pi_annee != 0))
    {
       // calcul de l'annee minimale
       if ($pi_annee_min==0)
          $pi_annee_min = $pi_annee;
       else
          if ($pi_annee < $pi_annee_min)
            $pi_annee_min = $pi_annee;         
       // calcul de l'annee maximale
       if ($pi_annee_max==0)
          $pi_annee_max = $pi_annee;
       else
          if ($pi_annee > $pi_annee_max)
            $pi_annee_max = $pi_annee;
    }          
    return array($pi_annee_min,$pi_annee_max);
  }

  /**
  *  Met à jour les statistiques du tableau $a_stats pour le patronyme $pst_patro en fonction de l'annee $pi_annee
  * @param string $pst_patro : Patronyme a mettre a jour
  * @param integer $pi_annee : Annee en cours
  */ 
  function maj_patro($pst_patro,$pst_type_acte,$pi_annee)
  {
     //$pst_patro = addslashes($pst_patro);
     
     if ((count($this->a_stat)!=0) && (isset($this->a_stat[strval($pst_patro)][strval($pst_type_acte)])))
     {  
        // Un patronyme existe déjà pour le patronyme et le type d'acte défini dans les statistiques
        list($i_annee_min,$i_annee_max,$i_nb_personnes) = $this->a_stat[strval($pst_patro)][strval($pst_type_acte)];
        list($i_annee_min,$i_annee_max) = $this->annees_min_max($pi_annee,$i_annee_min,$i_annee_max);        
        $this->a_stat[strval($pst_patro)][strval($pst_type_acte)] = array($i_annee_min,$i_annee_max,$i_nb_personnes+1);
        if (!in_array($pst_type_acte,$this->a_type_acte))
              $this->a_type_acte[] = $pst_type_acte;      
     }
     else
        $this->a_stat[strval($pst_patro)][strval($pst_type_acte)] = array($pi_annee,$pi_annee,1);
  }
  
  /**
   * @param string $pst_valeur valeur … convertir
   * @return string champ CSV  
   */     
  static function champ_csv($pst_valeur)
  {
     return is_null($pst_valeur) ? '\N' : "\"$pst_valeur\"";
  }
  
  /*
  * Met … jour le contenu de la table stats_patronyme … partir de la variable $a_stat
  * @param string $pst_rep_tmp r‚pertoire temporaire … utiliser  
  * @param string $pst_parametres_load_data options du load data    
  */
  public function sauve($pst_rep_tmp,$pst_parametres_load_data) {
     global $gst_jeu_de_caracteres_par_defaut;
     // Construction du fichier statistique
     $st_fich_temp = tempnam ($pst_rep_tmp, "stats_patronyme.csv");
     $pf=@fopen($st_fich_temp,"w");
     if ($pf===FALSE)
        throw new Exception("Ecriture fichier stats_patronyme.csv impossible");
     foreach ($this->a_stat as  $st_patronyme => $a_champs)
     {
        foreach ($a_champs as $st_type_acte => $a_champs2)
        {
           list($i_annee_min,$i_annee_max,$i_nb_occ) = $a_champs2;
           $st_ligne = implode(';',array_map("StatsPatronyme::champ_csv",array($st_patronyme,$this->i_idf_commune,$this->type_acte->vers_idf(strval($st_type_acte)),$this->i_idf_source,$i_annee_min,$i_annee_max,$i_nb_occ)));
           fwrite($pf,"$st_ligne\n");
        }
     }
     fclose($pf);
     usleep(500000);
     chmod($st_fich_temp,0444);
     $st_requete="delete from `stats_patronyme` where idf_commune=$this->i_idf_commune and idf_source=$this->i_idf_source";
     try
     {
        $this->connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       die("Suppression stats_patronyme impossible (COM=$this->idf_type_commune,SRC=$this->i_idf_source): " . $e->getMessage());
     }
     
     // Chargement du fichier statistique
     $st_fich_temp=addslashes($st_fich_temp);
     $st_requete="LOAD DATA $pst_parametres_load_data INFILE '$st_fich_temp' IGNORE INTO TABLE `stats_patronyme` CHARACTER SET $gst_jeu_de_caracteres_par_defaut FIELDS TERMINATED BY '\;' OPTIONALLY ENCLOSED BY '\"' LINES TERMINATED BY '\n' (patronyme,idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_personnes)";
     try
     {
       $this->connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       unlink($st_fich_temp);
       die('Sauvegarde stats_patronyme impossible: ' . $e->getMessage());
     }

     unlink($st_fich_temp);
   }

   function types_acte() {
      return $this->a_type_acte;
   }
   
   /*
   Met à jour les statistiques des patronymes suite à une modification
   @param integer $pi_idf_type_acte identifiant du type d'acte
   */
   function maj_stats($pi_idf_type_acte) {
      $st_requete = sprintf("delete from `stats_patronyme` where idf_commune=%d and idf_type_acte=%d and idf_source=%d",$this->i_idf_commune,$pi_idf_type_acte,$this->i_idf_source);
      $this->connexionBD->execute_requete($st_requete);
      $st_requete = sprintf("insert into `stats_patronyme` (patronyme,idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_personnes) select p.patronyme,%d,%d,%d,min(a.annee),max(a.annee),count(p.patronyme) from personne p join acte a on (p.idf_acte=a.idf) where a.idf_commune=%d and a.idf_type_acte=%d and a.idf_source=%d and a.annee!=0 and a.annee!=9999 group by p.patronyme,a.idf_commune,a.idf_type_acte,a.idf_source",$this->i_idf_commune,$pi_idf_type_acte,$this->i_idf_source,$this->i_idf_commune,$pi_idf_type_acte,$this->i_idf_source);
      $this->connexionBD->execute_requete($st_requete);   
   }
}
?>
