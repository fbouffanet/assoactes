<?php

class RequeteRecherche {

   protected $connexionBD;
   protected $a_variantes_trouvees;
   protected $a_communes_voisines;
   
   function __autoload($class_name) {
    require_once $class_name . '.php';
   }
   
   public function __construct($pconnexionBD) {
     $this->connexionBD = $pconnexionBD;
     $this->a_variantes_trouvees=array();
     $this->a_communes_voisines=array();     
   }
   
   /**
   * Renvoie la partie droite de l'egalite dans la clause de recherche par nom (Gère le joker* ) 
   * @param string $pst_patronyme : patronyme à chercher 
   * @param string $pst_variantes : variantes à chercher (si non vide)    
   */
   public function clause_droite_patronyme($pst_patronyme,$pst_variantes) {
      $st_clause = '';
      $pst_patronyme= addslashes($pst_patronyme);
      if (($pst_variantes=='') || preg_match('/\*/',$pst_patronyme))
      {
         if (preg_match('/\*/',$pst_patronyme))
           $st_clause = "like '".str_replace('*','%',$pst_patronyme)."'";
         else
           $st_clause = "= '$pst_patronyme'";
         $this->a_variantes_trouvees = array();

      } 
      else
      {
        $a_variantes=$this->connexionBD->sql_select("select vp1.patronyme from variantes_patro vp1, variantes_patro vp2 where vp2.patronyme = '$pst_patronyme'  COLLATE latin1_general_ci and vp1.idf_groupe=vp2.idf_groupe");
        $this->a_variantes_trouvees = $a_variantes;
        if (count($a_variantes)==0)
           $st_clause = "= '$pst_patronyme'";
        else
        {
           $c = __CLASS__;
           $st_variantes=join(',',array_map("$c::vers_nom",$a_variantes));
           $st_clause = "in ($st_variantes) ";
        }
      }
      return $st_clause;
   }
   
   /**
   * Renvoie la partie droite de l'egalite dans la clause de recherche par prénom (Gère le joker* ) 
   * @param string $pst_prenom :prénom à chercher
   * @param integer $pi_num_param numéro de paramètre 
   */
   function clause_droite_prenom($pst_prenom,$pi_num_param)
   {
     global $gi_precision_prenom;
     $st_clause = '';
     $pst_prenom= addslashes($pst_prenom);
     if ($pst_prenom!='')
     {   
        if (preg_match('/\*/',$pst_prenom))
           $st_clause = "like '".str_replace('*','%',$pst_prenom)."' collate latin1_german1_ci";
        else
        {
            $st_clause = "= :prenom$pi_num_param collate latin1_german1_ci";
           $this->connexionBD->ajoute_params(array(":prenom$pi_num_param"=>$pst_prenom));
        }  
     }
     return $st_clause;
   }
   
   /**
   * Renvoie la partie droite de l'egalite dans la clause de recherche de commune 
   * @param integer $pi_idf_commune : identifiant de la commune de recherche     
   * @param integer $pi_rayon : rayon de recherche en km
   */   
   function clause_droite_commune($pi_idf_commune,$pi_rayon)
   {
     if ($pi_rayon!='' && $pi_idf_commune!=0)
     {
        $this->a_communes_voisines= $this->connexionBD->liste_valeur_par_clef("select tk.idf_commune2,ca.nom from `tableau_kilometrique` tk join `commune_acte` ca on (tk.idf_commune2=ca.idf) where tk.distance <=$pi_rayon and tk.idf_commune1=$pi_idf_commune order by nom");
         $a_champs = array_keys($this->a_communes_voisines);
         $a_champs[] = $pi_idf_commune;
         return "in (".join(',',$a_champs).")";   
   }
   else if ($pi_idf_commune !=0) return "=$pi_idf_commune";
   }
   
   public function variantes_trouvees() {
     return $this->a_variantes_trouvees;
   }
   
   public function communes_voisines() {
     return $this->a_communes_voisines;
   }
   
   private static function vers_nom($pst_nom) {
      return "'".addslashes($pst_nom)."'";
   }
   
   
}

?>
