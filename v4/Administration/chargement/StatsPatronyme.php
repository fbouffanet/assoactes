<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

class StatsPatronyme {
  protected $connexionBD;
  protected $i_idf_commune;
  protected $i_idf_type_acte;
  protected $i_idf_source;
  protected $a_stat;
  protected $type_acte;
  protected $a_type_acte;
  protected $a_patronymes_a_supprimer;
  protected $a_patronymes_a_ajouter;
  
  public function __construct($pconnexionBD,$pi_idf_commune,$pi_idf_source) {
       $this->connexionBD = $pconnexionBD;
       $this->i_idf_commune=$pi_idf_commune;
       $this->i_idf_source=$pi_idf_source;
       $this->patronyme = Patronyme::singleton($pconnexionBD);
	   $this->type_acte = TypeActe::singleton($pconnexionBD);
       $this->a_type_acte = array();
	   $this->a_patronymes_a_supprimer=array();
	   $this->a_patronymes_a_ajouter=array();
	   $st_requete = "select pat.libelle,ta.nom,annee_min,annee_max,nb_personnes from `stats_patronyme` sp join `patronyme` pat on (sp.idf_patronyme=pat.idf) join `type_acte` as ta on (sp.idf_type_acte=ta.idf) where sp.idf_commune=$pi_idf_commune and sp.idf_source=$pi_idf_source";
       $this->a_stat=$this->connexionBD->liste_valeur_par_doubles_clefs($st_requete);
	   
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
  * @param string $pi_annee_min année minimale jusqu'à présent
  * @param string $pi_annne_max année maximale jusqu'à présent
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
    
  /**
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
   
   /**
   * enleve le patronyme de la liste des patronymes
   * @param string $pi_idf_patronyme identifiant du patronyme à enlever
   * @param string $pst_patronyme patronyme à enlever
   */
   public function enleve_patronyme($pi_idf_patronyme,$pst_patronyme)
   {
	 if (!array_key_exists($pi_idf_patronyme,$this->a_patronymes_a_supprimer))
     {
		 $this->a_patronymes_a_supprimer[$pi_idf_patronyme]=$pst_patronyme;
     }		 
   }
   
   /**
   * Met à jour les statistiques des paronymes supprimés pour la commune, la source et le type d'acte spécifiés
   * @param integer $pi_idf_commune identifiant de la commune
   * @param integer $pi_idf_source identifiant de la source
   * @param integer $pi_idf_type_acte identifiant du type d'acte
   */
   public function maj_stats_patronymes_supprimes($pi_idf_commune,$pi_idf_source,$pi_idf_type_acte)
   {
	   $a_params_precs=$this->connexionBD->params();
	   foreach ($this->a_patronymes_a_supprimer as $i_idf_patronyme => $st_patronyme)
	   {
		   $st_requete = "delete from `stats_patronyme` where idf_commune=:idf_commune and idf_source=:idf_source and idf_type_acte=:idf_type_acte and idf_patronyme=:idf_patronyme";
		   $a_params = array(':idf_commune'=>$pi_idf_commune,':idf_source'=>$pi_idf_source,':idf_type_acte'=>$pi_idf_type_acte,':idf_patronyme'=>$i_idf_patronyme);
		   $this->connexionBD->initialise_params($a_params);
		   $this->connexionBD->execute_requete($st_requete);
		   $st_requete = "insert into `stats_patronyme` (idf_patronyme,idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_personnes) select pat.idf,:idf_commune,:idf_type_acte,:idf_source,min(a.annee),max(a.annee),count(p.patronyme) from acte a join personne p on (p.idf_acte=a.idf) join patronyme pat on (p.patronyme=pat.libelle) where a.idf_commune=:idf_commune2 and a.idf_type_acte=:idf_type_acte2 and a.idf_source=:idf_source2 and a.annee!=0 and a.annee!=9999 and p.patronyme=:patronyme group by p.patronyme,a.idf_commune,a.idf_type_acte,a.idf_source";
		   $this->connexionBD->initialise_params(array(':idf_commune'=>$pi_idf_commune,':idf_commune2'=>$pi_idf_commune,':idf_source'=>$pi_idf_source,':idf_source2'=>$pi_idf_source,':idf_type_acte'=>$pi_idf_type_acte,':idf_type_acte2'=>$pi_idf_type_acte,':patronyme'=>$st_patronyme));
		   $this->connexionBD->execute_requete($st_requete);
	   }
	   $this->connexionBD->initialise_params($a_params_precs);
   }
    
    /**
   * ajoute le patronyme à la liste des patronymes à ajouter
   * @param string $pst_patronyme patronyme à enlever
   */
   public function ajoute_patronyme($pst_patronyme)
   {
	 if (!in_array($pst_patronyme,$this->a_patronymes_a_ajouter))
     {
		 $this->a_patronymes_a_ajouter[]=$pst_patronyme;
     }		 
   }
   
   /**
   * Met à jour les statistiques des paronymes ajoutés pour la commune, la source et le type d'acte spécifiés
   * @param integer $pi_idf_commune identifiant de la commune
   * @param integer $pi_idf_source identifiant de la source
   * @param integer $pi_idf_type_acte identifiant du type d'acte
   */
   public function maj_stats_patronymes_ajoutes($pi_idf_commune,$pi_idf_source,$pi_idf_type_acte)
   {
	   $a_params_precs=$this->connexionBD->params();
	   foreach ($this->a_patronymes_a_ajouter as $st_patronyme)
	   {            
			$st_requete = "select count(*) from patronyme where libelle=:patronyme";
			$this->connexionBD->initialise_params(array(':patronyme'=>$st_patronyme));
			$i_nouveau_patronyme = $this->connexionBD->sql_select1($st_requete);
			if ($i_nouveau_patronyme==0)
			{
					$this->patronyme->ajoute($st_patronyme);
			}
	   }
	   $this->patronyme->sauve();
	   foreach ($this->a_patronymes_a_ajouter as $st_patronyme)
	   {         		  	   
		   $st_requete = "insert into `stats_patronyme`(idf_patronyme,idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_personnes) select pat.idf,:idf_commune,:idf_type_acte,:idf_source,min(a.annee),max(a.annee),count(p.patronyme) from acte a join personne p on (p.idf_acte=a.idf),patronyme pat where a.idf_commune=:idf_commune2 and a.idf_type_acte=:idf_type_acte2 and a.idf_source=:idf_source2 and p.patronyme=pat.libelle and a.annee!=0 and a.annee!=9999 and p.patronyme=:patronyme group by p.patronyme,a.idf_commune,a.idf_type_acte,a.idf_source";
		   $a_params = array(':idf_commune'=>$pi_idf_commune,':idf_commune2'=>$pi_idf_commune,':idf_source'=>$pi_idf_source,':idf_source2'=>$pi_idf_source,':idf_type_acte'=>$pi_idf_type_acte,':idf_type_acte2'=>$pi_idf_type_acte,':patronyme'=>$st_patronyme);
		   $this->connexionBD->initialise_params($a_params);
		   $this->connexionBD->execute_requete($st_requete);
		   $i_nb_lignes_modifiees=$this->connexionBD->nb_lignes_affectees();
	   }
	   $this->connexionBD->initialise_params($a_params_precs);
   }
   
}
?>
