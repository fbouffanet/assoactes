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
       $this->patronyme = Patronyme::singleton($pconnexionBD);
	   $this->type_acte = TypeActe::singleton($pconnexionBD);
       $this->a_type_acte = array();
       $this->a_stat=$this->connexionBD->liste_valeur_par_doubles_clefs("select p.libelle,ta.nom,annee_min,annee_max,nb_personnes from `stats_patronyme` sp join `patronyme` p on (sp.idf_patronyme=p.idf) join `type_acte` as ta on (sp.idf_type_acte=ta.idf) where sp.idf_commune=$pi_idf_commune and sp.idf_source=$pi_idf_source");
  }
  
  public function sauvePatronyme() {
								 $this -> patronyme -> sauve();
  }
  
  public function sauveTypeActe() {
								 $this -> type_acte -> sauve();
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
     $this->patronyme->ajoute($pst_patro);
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
    
  /*
  * Met à jour le contenu de la table stats_patronyme à partir de la variable $a_stat  
  */
  public function sauve() {

	 $a_params_precs=$this->connexionBD->params();
	 $a_stats_a_creer = array();
     $a_colonnes = array();
	 $i=0;
     foreach ($this->a_stat as  $st_patronyme => $a_champs)
     {
        foreach ($a_champs as $st_type_acte => $a_champs2)
        {
           list($i_annee_min,$i_annee_max,$i_nb_occ) = $a_champs2;
		   $a_colonnes[] = "(:idf_patronyme$i,:idf_commune$i,:idf_type_acte$i,:idf_source$i,:annee_min$i,:annee_max$i,:nb_occ$i)";
		   $a_stats_a_creer[":idf_patronyme$i"]=$this->patronyme->vers_idf(strval($st_patronyme));
		   $a_stats_a_creer[":idf_commune$i"]=$this->i_idf_commune;
		   $a_stats_a_creer[":idf_type_acte$i"]=$this->type_acte->vers_idf(strval($st_type_acte));
		   $a_stats_a_creer[":idf_source$i"]=$this->i_idf_source;
		   $a_stats_a_creer[":annee_min$i"]=$i_annee_min;
		   $a_stats_a_creer[":annee_max$i"]=$i_annee_max;
		   $a_stats_a_creer[":nb_occ$i"]=$i_nb_occ;
		   $i++;
        }
     }
     $st_requete="delete from `stats_patronyme` where idf_commune=$this->i_idf_commune and idf_source=$this->i_idf_source";
     try
     {
		$this->connexionBD->initialise_params(array()); 
        $this->connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       die("Suppression stats_patronyme impossible (COM=$this->idf_type_commune,SRC=$this->i_idf_source): " . $e->getMessage());
     }
     if (count($this->a_stat)>0)
	 {	 
		$st_requete = "insert ignore into `stats_patronyme` (idf_patronyme,idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_personnes) values ";
		$st_colonnes = join(',',$a_colonnes);
		$st_requete .= $st_colonnes;
		try
		{
			$this->connexionBD->initialise_params($a_stats_a_creer);  
            $this->connexionBD->execute_requete($st_requete);
		    $this->connexionBD->initialise_params($a_params_precs);
		}
		catch (Exception $e) {
			die('Sauvegarde stats_patronyme impossible: ' . $e->getMessage());
		}
	 }	
   }

   function types_acte() {
      return $this->a_type_acte;
   }
   
	/*
	Met à jour les statistiques des patronymes suite à une modification
	@param integer $pi_idf_type_acte identifiant du type d'acte
	@param integer $pi_idf_acte identifiant de l'acte modifié
	*/
	function maj_stats($pi_idf_type_acte,$pi_idf_acte=null) {
		$st_requete = sprintf("delete from `stats_patronyme` where idf_commune=%d and idf_type_acte=%d and idf_source=%d",$this->i_idf_commune,$pi_idf_type_acte,$this->i_idf_source);
		$this->connexionBD->execute_requete($st_requete);
		// Création des éventuels nouveaux patronymes
		if (!empty($pi_idf_acte))
		{	  
			$st_requete = sprintf("select p.patronyme from personne p where p.idf_acte=%d and p.patronyme not in (select libelle from patronyme)",$pi_idf_acte);
			$a_nouveaux_patronymes = $this->connexionBD->sql_select($st_requete);
			if (count($a_nouveaux_patronymes)>0)
			{
				foreach($a_nouveaux_patronymes as $st_patronyme)
				{
					$this->patronyme->ajoute($st_patronyme);			  
				}
				$this->patronyme->sauve();
			}
		}	
		$st_requete = sprintf("insert into `stats_patronyme` (idf_patronyme,idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_personnes) select pat.idf,%d,%d,%d,min(a.annee),max(a.annee),count(p.patronyme) from personne p join patronyme pat on (p.patronyme=pat.libelle) join acte a on (p.idf_acte=a.idf) where a.idf_commune=%d and a.idf_type_acte=%d and a.idf_source=%d and a.annee!=0 and a.annee!=9999 group by p.patronyme,a.idf_commune,a.idf_type_acte,a.idf_source",$this->i_idf_commune,$pi_idf_type_acte,$this->i_idf_source,$this->i_idf_commune,$pi_idf_type_acte,$this->i_idf_source);
		$this->connexionBD->execute_requete($st_requete);   
   }
      
}
?>
