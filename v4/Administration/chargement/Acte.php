<?php

class Acte {
    protected $connexionBD;
     protected $compteurActe;
     protected $typeActe;
     protected $i_idf;
     protected $i_idf_commune;
     protected $st_type_acte;
     protected $i_idf_source;
     protected $i_idf_releveur;
     protected $st_date;
     protected $i_jour;
     protected $i_mois;
     protected $i_annee;
     protected $st_date_rep;
     protected $st_cote;
     protected $st_libre;
     protected $st_commentaires;
     protected $i_numero_enregistrement;
     protected $st_url;
     protected $i_details_supplementaires;
     protected $a_liste_personnes;
     protected $st_commune;
     protected $st_commune_insee;
     protected $i_dept;
     protected $st_sigle_type_acte_nimegue;
     protected $a_infos;
     protected $i_nb_lignes;
    
     protected $ga_grille_saisie;
    
     function __autoload($class_name)
    
    {
         require_once $class_name . '.php';
         } 
    
    public function __construct($pconnexionBD, $pi_idf_commune, $pst_type_acte, $pst_sigle_acte, $pi_idf_source, $pst_date, $pi_idf_releveur)
    
    {
         $this -> connexionBD = $pconnexionBD;
         $this -> compteurActe = CompteurActe :: singleton($pconnexionBD);
         $this -> typeActe = TypeActe :: singleton($pconnexionBD);
         $this -> compteurActe -> incremente();
         $this -> i_idf = $this -> compteurActe -> getCompteur();
         $this -> i_idf_commune = $pi_idf_commune;
         $this -> i_code_commune = null;
         $this -> st_commune = null;
         $this -> st_commune_insee = null;
         $this -> i_dept = null;
         $this -> st_type_acte = $pst_type_acte;
         $this -> i_idf_type_acte = $this -> typeActe -> vers_idf($this -> st_type_acte);
         $this -> typeActe -> ajoute($pst_type_acte, $pst_sigle_acte);
         $this -> i_idf_source = $pi_idf_source;
         $this -> st_date = $pst_date;
         $this -> i_idf_releveur = $pi_idf_releveur;
         list($i_jour, $i_mois, $i_annee) = $this -> date_vers_triplet($pst_date);
         $this -> i_jour = $i_jour;
         $this -> i_mois = $i_mois;
         $this -> i_annee = $i_annee;
         $this -> ga_grille_saisie = array(
            IDF_NAISSANCE => array(IDF_PRESENCE_INTV, IDF_PRESENCE_PERE, IDF_PRESENCE_MERE, IDF_PRESENCE_PARRAIN, IDF_PRESENCE_MARRAINE),
             IDF_DECES => array(IDF_PRESENCE_INTV, IDF_PRESENCE_EXCJT, IDF_PRESENCE_PERE, IDF_PRESENCE_MERE, IDF_PRESENCE_TEMOIN, IDF_PRESENCE_TEMOIN),
             IDF_MARIAGE => array(IDF_PRESENCE_INTV, IDF_PRESENCE_EXCJT, IDF_PRESENCE_PERE, IDF_PRESENCE_MERE, IDF_PRESENCE_INTV, IDF_PRESENCE_EXCJT, IDF_PRESENCE_PERE, IDF_PRESENCE_MERE, IDF_PRESENCE_TEMOIN, IDF_PRESENCE_TEMOIN, IDF_PRESENCE_TEMOIN, IDF_PRESENCE_TEMOIN));
         $this -> ga_grille_couples = array(
            IDF_NAISSANCE => array(array(1, 2)),
             IDF_DECES => array(array(0, 1), array(2, 3)),
             IDF_MARIAGE => array(array(0, 1), array(2, 3), array(4, 5), array(6, 7), array(0, 4)));
         $this -> ga_parents = array(
            IDF_NAISSANCE => array(0 => array(1, 2)),
             IDF_DECES => array(0 => array(2, 3)),
             IDF_MARIAGE => array(0 => array(2, 3), 4 => array(6, 7))
            );
         $this -> ga_sexe_personne = array(
            IDF_NAISSANCE => array('?', 'M', 'F', 'M', 'F'),
             IDF_DECES => array('?', '?', 'M', 'F', '?', '?'),
             IDF_MARIAGE => array('M', 'F', 'M', 'F', 'F', 'M', 'M', 'F', '?', '?', '?', '?'));
         $this -> a_liste_personnes = array();
        
         $this -> a_params_completion_auto = array();
         $this -> st_sigle_type_acte_nimegue = null;
         $this -> a_infos = false;
         $this -> a_liste_personnes = array();
         } 
    
    public function importeNimV2($pst_date_rep, $pst_cote, $pst_libre, $pst_commentaires)
    
    {
         $this -> st_date_rep = $pst_date_rep;
         $this -> st_cote = $pst_cote;
         $this -> st_libre = $pst_libre;
        
         if (preg_match('/(https*\:\/\/[\w\:\/\.]+)/', $pst_commentaires, $a_champs))
             {
            $this -> st_url = $a_champs[1];
             $this -> st_commentaires = str_replace($this -> st_url, '', $pst_commentaires);
             } 
        else
             $this -> st_commentaires = $pst_commentaires;
         } 
    
    public function importeNimV3($pst_date_rep, $pst_cote, $pst_libre, $pst_commentaires)
    
    {
         $this -> st_date_rep = $pst_date_rep;
         $this -> st_cote = $pst_cote;
         $this -> st_libre = $pst_libre;
         $this -> st_commentaires = $pst_commentaires;
         if (preg_match('/(https*\:\/\/[\w\:\/\.]+)/', $pst_commentaires, $a_champs))
             {
            $this -> st_url = $a_champs[1];
             $this -> st_commentaires = str_replace($this -> st_url, '', $pst_commentaires);
             } 
        } 
    
    public function setDetailSupp($pi_details_supplementaires)
    
    {
         $this -> i_details_supplementaires = $pi_details_supplementaires;
         } 
    
    public function setCommentaires($pst_commentaires)
    
    {
         $this -> st_commentaires = $pst_commentaires;
         } 
    
    public function getCommentaires()
    
    {
         return $this -> st_commentaires;
         } 
    
    public function getNbLignes()
    
    {
         return $this -> i_nb_lignes;
         } 
    
    public function setCommune($pst_commune)
    
    {
         $this -> st_commune = $pst_commune;
         } 
    
    public function getCommune()
    
    {
         return $this -> st_commune;
         } 
    
    public function setIdfCommune($pi_idf_commune)
    
    {
         $this -> i_idf_commune = $pi_idf_commune;
         } 
    
    public function getIdfCommune()
    
    {
         return $this -> i_idf_commune;
         } 
    
    public function setIdfSource($pi_idf_source)
    
    {
         $this -> i_idf_source = $pi_idf_source;
         } 
    
    public function getIdfSource()
    
    {
         return $this -> i_idf_source;
         } 
    
    public function setIdfTypeActe($pi_idf_type_acte)
    
    {
         $this -> i_idf_type_acte = $pi_idf_type_acte;
         } 
    
    public function getIdfTypeActe()
    
    {
         return $this -> i_idf_type_acte;
         } 
    
    public function setUrl($pst_url)
    
    {
         if (preg_match('/(https*\:\/\/[\w\:\/\.]+)/', $pst_url, $a_champs))
             $this -> st_url = $a_champs[1];
         } 
    
    public function getUrl()
    
    {
         return $this -> st_url;
         } 
    
    public function getIdf()
    
    {
         return $this -> i_idf;
         } 
    
    public function getAnnee()
    
    {
         return $this -> i_annee;
         } 
    
    public function getListePersonnes()
    
    {
         return $this -> a_liste_personnes;
         } 
		 
	public function sauveTypeActe() {
								 $this -> type_acte -> sauve();
	} 	 
    
    /**
     * Positionne la liste des filtres jquery validator � activer par champ de param�tre
     * 
     * @param array $ tableau nom du param�tre => (type de filtre, message d'erreur � afficher)
     */
    public function setFiltresParametres($pa_filtres_parametres)
    
    {
         $this -> a_filtres_parametres = $pa_filtres_parametres;
         }
     
     /*
     * Renvoie les d�tails suppl�mentaires
     */         
     public function getDetailsSupplementaires()
     {
        return $this->i_details_supplementaires;
     } 
    
    /**
     * Renvoie la liste des filtres jquery validator � activer par champ de param�tre
     * 
     * @return array tableau nom du param�tre => (type de filtre, message d'erreur � afficher)
     */
    public function getFiltresParametres()
    
    
    {
         return $this -> a_filtres_parametres;
         } 
    
    /**
     * Renvoie les param�tres d'autocompl�tion
     */
    public function getParamsCompletionAuto()
    
    
    {
         return $this -> a_params_completion_auto;
         } 
    
    /**
     * Initialise les param�tres d'autocompl�tion
     */
    public function setParamsCompletionAuto($pa_params_completion_auto)
    
    
    {
         $this -> a_params_completion_auto = $pa_params_completion_auto;
         } 
    
    /**
     * Renvoie le contenu de l'acte sous la forme d'une chaine CSV
     * 
     * @return string acte sous forme CSV (s�parateur=;)
     */
    public function ligne_sql_a_inserer()
    
    
    {
		 $a_actes_a_creer[":idf$this->i_idf"]=$this -> i_idf;
		 $a_actes_a_creer[":idf_commune$this->i_idf"]=$this -> i_idf_commune;
		 $a_actes_a_creer[":idf_type_acte$this->i_idf"]=empty($this -> st_type_acte) ? null : $this -> typeActe -> vers_idf($this -> st_type_acte);
		 $a_actes_a_creer[":idf_source$this->i_idf"]=$this -> i_idf_source;
		 $a_actes_a_creer[":idf_releveur$this->i_idf"]=$this -> i_idf_releveur;
		 $a_actes_a_creer[":date$this->i_idf"]=$this -> st_date;
		 $a_actes_a_creer[":jour$this->i_idf"]=$this -> i_jour;
		 $a_actes_a_creer[":mois$this->i_idf"]=$this -> i_mois;
		 $a_actes_a_creer[":annee$this->i_idf"]=$this -> i_annee;
		 $a_actes_a_creer[":date_rep$this->i_idf"]=$this -> st_date_rep;
		 $a_actes_a_creer[":cote$this->i_idf"]=$this -> st_cote;
		 $a_actes_a_creer[":libre$this->i_idf"]=$this -> st_libre;
		 $a_actes_a_creer[":commentaires$this->i_idf"]=$this -> st_commentaires;
		 $a_actes_a_creer[":url$this->i_idf"]=$this -> st_url;
		 $a_actes_a_creer[":details_supplementaires$this->i_idf"]=$this -> i_details_supplementaires;
		 $a_actes_a_creer[":creation$this->i_idf"]=time(); 
		 $a_actes_a_creer[":modification$this->i_idf"]=time(); 
          return array("(:idf$this->i_idf,:idf_commune$this->i_idf,:idf_type_acte$this->i_idf,:idf_source$this->i_idf,:idf_releveur$this->i_idf,:date$this->i_idf,:jour$this->i_idf,:mois$this->i_idf,:annee$this->i_idf,:date_rep$this->i_idf,:cote$this->i_idf,:libre$this->i_idf,:commentaires$this->i_idf,:url$this->i_idf,:details_supplementaires$this->i_idf,:creation$this->i_idf,:modification$this->i_idf)",$a_actes_a_creer);
         } 
    
    /**
     * Renvoie la requ�te de base pour un chargement d'acte
     */
    public static function requete_base()
    
    {
         
         return "insert INTO `acte` (idf,idf_commune,idf_type_acte,idf_source,idf_releveur,date,jour,mois,annee,date_rep,cote,libre,commentaires,url,details_supplementaires,created,changed) values ";
         } 
    
    /**
     * Renvoie une date lisible
     */
    private static function date_propre($pst_date)
    
    
    {
         return str_replace('_', '?', $pst_date);
         } 
    
    /**
     * renvoie la date sous la forme AAAAMMJJ
     * 
     * @param string $pst_date (JJ/MM/AAAA)
     * return array (jour, mois, annee)
     */
    private function date_vers_triplet($pst_date)
    
    
    {
         if (!empty($pst_date))
             {
            list ($i_jour, $i_mois, $i_annee) = preg_split('/\//', $pst_date, 3);
             $i_jour = str_replace('_', '0', $i_jour);
             $i_mois = str_replace('_', '0', $i_mois);
             $i_annee = str_replace('_', '0', $i_annee);
             $i_jour = str_replace('.', '0', $i_jour);
             $i_mois = str_replace('.', '0', $i_mois);
             $i_annee = str_replace('.', '0', $i_annee);
             $i_jour = str_replace('?', '0', $i_jour);
             $i_mois = str_replace('?', '0', $i_mois);
             $i_annee = str_replace('?', '0', $i_annee);
             } 
        else
             {
            $i_jour = '';
             $i_mois = '';
             $i_annee = '';
             } 
        return array($i_jour, $i_mois, $i_annee);
         } 
    
    /**
     * Charge l'acte et la liste des personnes rattach�es � partir de la BD
     * 
     * @param integer $pi_idf_acte identifiant de l'acte
     */
    public function charge($pi_idf_acte)
    
    
    {
         $st_requete = "select a.idf_commune,concat(lpad(ca.code_insee,5,'0'),lpad(numero_paroisse,2,'0')),ca.nom,concat(ca.nom,' (',lpad(ca.code_insee,5,'0'),')'),left(lpad(ca.code_insee,5,'0'),2),ta.nom,ta.idf,ta.sigle_nimegue,a.idf_source,a.idf_releveur,a.date,a.jour,a.mois,a.annee,a.date_rep,a.cote,a.libre,a.commentaires,a.url,a.details_supplementaires from acte a left join type_acte ta on (a.idf_type_acte=ta.idf) join commune_acte ca  on (a.idf_commune=ca.idf) where a.idf=$pi_idf_acte";
         // print("Req=$st_requete<br>");
        list($i_idf_commune, $i_code_commune, $st_commune, $st_commune_insee, $i_dept, $st_type_acte, $i_idf_type_acte, $st_sigle_type_acte_nimegue, $i_idf_source, $i_idf_releveur, $st_date, $i_jour, $i_mois, $i_annee, $st_date_rep, $st_cote, $st_libre, $st_commentaires, $st_url, $i_details_supplementaires) = $this -> connexionBD -> sql_select_liste($st_requete);
         $this -> i_idf = $pi_idf_acte;
         $this -> i_idf_commune = $i_idf_commune;
         $this -> i_code_commune = $i_code_commune;
         $this -> st_commune = $st_commune;
         $this -> st_commune_insee = $st_commune_insee;
         $this -> i_dept = $i_dept;
         $this -> st_type_acte = $st_type_acte;
         $this -> st_sigle_type_acte_nimegue = $st_sigle_type_acte_nimegue;
         $this -> i_idf_type_acte = $i_idf_type_acte;
         $this -> i_idf_source = $i_idf_source;
         $this -> st_date = $st_date;
         $this -> i_idf_releveur = $i_idf_releveur;
         list($i_jour, $i_mois, $i_annee) = $this -> date_vers_triplet($st_date);
         $this -> i_jour = $i_jour;
         $this -> i_mois = $i_mois;
         $this -> i_annee = $i_annee;
         $this -> st_date_rep = str_replace(' ', '', $st_date_rep);
         $this -> st_cote = $st_cote;
         $this -> st_libre = $st_libre;
         if (preg_match('/(https*\:\/\/[\w\:\/\.]+)/', $st_commentaires, $a_champs))
             {
            $this -> st_url = $a_champs[1];
             $this -> st_commentaires = str_replace($this -> st_url, '', $st_commentaires);
             } 
        else
             {
            $this -> st_url = $st_url;
             $this -> st_commentaires = $st_commentaires;
             }			 
        $this -> i_details_supplementaires = $i_details_supplementaires;
         $this -> a_liste_personnes = array();
         $st_requete = "select idf from personne where idf_acte=$pi_idf_acte order by idf";
         $a_liste_personnes = $this -> connexionBD -> sql_select($st_requete);
         $i=1;
         foreach ($a_liste_personnes as $i_idf_personne)
         {
            $o_pers = new Personne($this -> connexionBD, $pi_idf_acte, null, null, null, null);
            $o_pers -> setNumParam($i);
             $o_pers -> charge($i_idf_personne);
             $this -> a_liste_personnes[] = $o_pers;
             $i++; 
             }
             
        } 
    
    /**
     * Sauvegarde l'acte dans la base de donn�es
     * 
     * @return integer identifiant de l'acte cr��
     */
    public function sauve()
    
    
    {
         $i_idf = $this -> i_idf;
         $i_idf_commune = $this -> i_idf_commune;
         $i_idf_type_acte = $this -> typeActe -> vers_idf($this -> st_type_acte);
         $i_idf_source = $this -> i_idf_source;
         $st_date = $this -> st_date;
         $i_idf_releveur = $this -> i_idf_releveur;
         $i_jour = $this -> i_jour;
         $i_mois = $this -> i_mois;
         $i_annee = $this -> i_annee;
         $st_date_rep = $this -> st_date_rep;
         $st_cote = $this -> st_cote;
         $st_libre = $this -> st_libre;
         $st_url = $this -> st_url;
         $st_commentaires = $this -> st_commentaires;
         if (($this -> a_infos == false) && (preg_match('/vue/i', $st_cote)||(!empty($this -> st_url))))
             $i_details_supplementaires = 2;
         else if (($this -> a_infos) || !empty($this -> st_libre) || !empty($this -> st_commentaires))
             $i_details_supplementaires = 1;
         else
             $i_details_supplementaires = 0;;
         $st_commentaires = str_replace("\n", '�', $st_commentaires);
         $created = time();
		     $changed = time();
         if (isset($this -> i_idf))
             {
            $i_idf = $this -> i_idf;
              $this -> connexionBD -> initialise_params(array(':idf' => $i_idf, ':idf_commune' => $i_idf_commune, ':idf_type_acte' => $i_idf_type_acte, ':idf_source' => $i_idf_source, ':date' => $st_date, ':jour' => $i_jour, ':mois' => $i_mois, ':annee' => $i_annee, ':date_rep' => $st_date_rep, ':cote' => $st_cote, ':libre' => $st_libre, ':url' => $st_url, ':commentaires' => $st_commentaires, ':details_supplementaires' => $i_details_supplementaires, ':changed' => $changed));
             $st_requete = "update acte set idf_commune=:idf_commune,idf_type_acte=:idf_type_acte,idf_source=:idf_source,date=:date,jour=:jour,mois=:mois,annee=:annee,date_rep=:date_rep,cote=:cote,libre=:libre,url=:url,commentaires=:commentaires,details_supplementaires=:details_supplementaires,changed=:changed where idf=:idf";
             $this -> connexionBD -> execute_requete($st_requete);
             return $i_idf;
             } 
        else
             {
				$this -> connexionBD -> initialise_params(array(':idf_commune' => $i_idf_commune, ':idf_type_acte' => $i_idf_type_acte, ':idf_source' => $i_idf_source, ':date' => $st_date, ':jour' => $i_jour, ':mois' => $i_mois, ':annee' => $i_annee, ':date_rep' => $st_date_rep, ':cote' => $st_cote, ':libre' => $st_libre, ':url' => $st_url, ':commentaires' => $st_commentaires, ':details_supplementaires' => $i_details_supplementaires,':created'=>$created,':changed'=>$changed)); 
            $st_requete = "insert into acte(idf_commune,idf_type_acte,idf_source,date,jour,mois,annee,date_rep,cote,libre,commentaires,url,details_supplementaires) values(:idf_commune,:idf_type_acte,:idf_source,:date,:jour,:mois,:annee,:date_rep,:cote,:libre,:commentaires,:url,:details_supplementaires,$created,$changed)";
             $this -> connexionBD -> execute_requete($st_requete);
             return $this -> connexionBD -> dernier_idf_insere();
             } 
        } 
    
    /**
     * Initialise l'acte depuis une formulaire post
     * 
     * @param integer $pi_idf_acte identifiant de l'acte
     */
    public function initialise_depuis_formulaire($pi_idf_acte)
    
    
    {
         $this -> i_idf = $pi_idf_acte;
         if (get_magic_quotes_gpc())
             {
            if (ini_get('magic_quotes_sybase'))
                 {
                $this -> st_date = isset($_POST["date"])?substr(trim($_POST["date"]), 0, 10):'';
                 $this -> st_date_rep = isset($_POST["date_rep"])?substr(trim($_POST["date_rep"]), 0, 25):'';
                 $this -> st_cote = isset($_POST["cote"])?substr(trim($_POST["cote"]), 0, 40):'';
                 $this -> st_libre = isset($_POST["libre"])?substr(trim($_POST["libre"]), 0, 50):'';
                 $this -> st_commentaires = isset($_POST["cmt_acte"])?substr(trim($_POST["cmt_acte"]), 0, 1200):'';
                 $this -> st_url = isset($_POST["permalien"])?substr(trim($_POST["permalien"]), 0, 100):'';
                 } 
            else
                 {
                $this -> st_date = isset($_POST["date"])?stripslashes(substr(trim($_POST["date"]), 0, 10)):'';
                 $this -> st_date_rep = isset($_POST["date_rep"])?stripslashes(substr(trim($_POST["date_rep"]), 0, 25)):'';
                 $this -> st_cote = isset($_POST["cote"])?stripslashes(substr(trim($_POST["cote"]), 0, 40)):'';
                 $this -> st_libre = isset($_POST["libre"])?stripslashes(substr(trim($_POST["libre"]), 0, 50)):'';
                 $this -> st_commentaires = isset($_POST["cmt_acte"])?stripslashes(substr(trim($_POST["cmt_acte"])), 0, 1200):'';
                 $this -> st_url = isset($_POST["permalien"])?stripslashes(substr(trim($_POST["permalien"]), 0, 100)):'';
                 } 
            } 
        else
             {
            $this -> st_date = isset($_POST["date"])?substr(trim($_POST["date"]), 0, 10):'';
             $this -> st_date_rep = isset($_POST["date_rep"])?substr(trim($_POST["date_rep"]), 0, 25):'';
             $this -> st_cote = isset($_POST["cote"])?substr(trim($_POST["cote"]), 0, 40):'';
             $this -> st_libre = isset($_POST["libre"])?substr(trim($_POST["libre"]), 0, 50):'';
             $this -> st_commentaires = isset($_POST["cmt_acte"])?substr(trim($_POST["cmt_acte"]), 0, 1200):'';
             $this -> st_url = isset($_POST["permalien"])?substr(trim($_POST["permalien"]), 0, 100):'';
             } 
        list($i_jour, $i_mois, $i_annee) = $this -> date_vers_triplet($this -> st_date);
         $this -> i_jour = $i_jour;
         $this -> i_mois = $i_mois;
         $this -> i_annee = $i_annee;
         $a_grille = array_key_exists($this -> i_idf_type_acte, $this -> ga_grille_saisie) ? $this -> ga_grille_saisie[$this -> i_idf_type_acte] : $this -> ga_grille_saisie[IDF_MARIAGE];
         $i_nb_personnes = count($a_grille);
         $this -> a_liste_personnes = array();
         for ($i = 0;$i < $i_nb_personnes;$i++)
         {
            $o_pers = new Personne($this -> connexionBD, $this -> i_idf, null, null, null, null);
             $o_pers -> setNumParam($i);
             $o_pers -> initialise_depuis_formulaire($pi_idf_acte, $a_grille[$i]);
             $this -> a_liste_personnes[] = $o_pers;
             } 
        } 
    
    /**
     * Renvoie un formulaire HTML d'�dition de l'ent�te d'un acte
     */
    public function formulaire_haut_acte()
    
    
    {
         global $ga_mois_revolutionnaires, $ga_annees_revolutionnaires, $ga_mois_revolutionnaires_nimegue, $gst_url_images, $gst_url_site;
         $st_chaine = '';
         $st_chaine .= sprintf("<tr><th>Type d'acte</th><td colspan=2>%s</td>", $this -> st_type_acte);
         $st_chaine .= sprintf("<th>Date </th><td class=\"lib_erreur\" colspan=2><input type=text id=\"date\" name=\"date\" value=\"%s\" maxlength=10 class=\"form-control\"></td>", $this -> date_propre($this -> st_date));
		 $i_jour_rep = null;
         $i_mois_rep = null;
         $i_annee_rep = null;
		 $st_chaine_date_rep = "<div class=\"row form-group\">";
		$st_chaine_date_rep .= '<div class="col-xs-2">';
		$st_chaine_date_rep .= "<input type=\"text\" name=\"jour_rep\" id=\"jour_rep\"  size=\"2\" maxlength=\"2\" value=\"$i_jour_rep\" class=\"form-control\">";
		$st_chaine_date_rep .= '</div>';
		$st_chaine_date_rep .= '<div class="col-xs-4">';
         $st_chaine_date_rep .= ' <select name="mois_rep" id="mois_rep" class="form-control">';
         $st_chaine_date_rep .= '<option value=""></option>';
         $st_chaine_date_rep .= chaine_select_options($i_mois_rep, $ga_mois_revolutionnaires);
         $st_chaine_date_rep .= '</select>';
		 $st_chaine_date_rep .= '</div>';
         $st_chaine_date_rep .= '<div class="col-xs-2">';
		 $st_chaine_date_rep .= ' <select name="annee_rep" id="annee_rep" class="form-control">';
         $st_chaine_date_rep .= '<option value=""></option>';		 
         $st_chaine_date_rep .= chaine_select_options($i_annee_rep, $ga_annees_revolutionnaires);
         $st_chaine_date_rep .= '</select>';
		 $st_chaine_date_rep .= '</div>';
         $st_chaine_date_rep .= "<button type=\"button\" class=\"maj_date_rep btn btn-primary col-xs-4\" data-jour_rep=\"#jour_rep\" data-mois_rep=\"#mois_rep\" data-annee_rep=\"#annee_rep\" data-date_greg=\"#date\" data-date_rep=\"#date_rep\" data-cmt=\"\" data-id_fenetre=\"#popup_date_rep_acte\">Maj date</button></div>";
         
         if (!empty($this -> st_date_rep))
             {
            list($i_jour_rep, $st_mois_rep, $i_annee_rep) = explode('/', $this -> st_date_rep, 3);
             $a_mois_rep_nim_vers_entier = array_flip($ga_mois_revolutionnaires_nimegue);
             $i_mois_rep = array_key_exists(ucfirst(strtolower($st_mois_rep)), $a_mois_rep_nim_vers_entier) ? $a_mois_rep_nim_vers_entier[ucfirst(strtolower($st_mois_rep))]: null;
             $i_annee_rep = (int) $i_annee_rep;
             } 
		// Champ date r�publicaine
        $st_chaine .= sprintf("<td colspan=3><div class=\"btn-group-vertical\"><input type=text name=date_rep id=date_rep value=\"%s\" maxlength=10 class=\"form-control form-control-xs\">", $this -> st_date_rep);
		// Bouton d'ouverture du popup
        $st_chaine .= "<button type=\"button\" class=\"ouvre_popup btn btn-primary btn-xs\" data-id_fenetre=\"#popup_date_rep_acte\"><span class=\"glyphicon glyphicon-calendar\"></span>  Saisir une date r&eacute;publicaine</button></div>";
         // Contenu du popup
        $st_chaine .= sprintf("<div class=\"popup_date_rep\" id=\"popup_date_rep_acte\" title=\"Fenetre\">%s</div></td></tr>\n", $st_chaine_date_rep);	 
        
		 
         $st_chaine .= sprintf("<tr><th>Commune</th><td colspan=2>%s</td>", $this -> st_commune);
		 $st_chaine .= sprintf("<th>Cote</th><td colspan=2><input type=text name=cote value=\"%s\" maxlength=40 class=\"form-control\"></td>", $this -> st_cote);
         $st_chaine .= sprintf("<th >Libre</th><td colspan=2><input type=text name=libre value=\"%s\" size=50 maxlength=70 class=\"form-control\"></td></tr>\n", $this -> st_libre);
         
         $st_chaine .= sprintf("<tr><th >Permalien <a target=\"_blank\" href=\"%s/Permalien_AD16.html\"><span class=\"glyphicon glyphicon-link\"></span></a></th><td colspan=7 class=\"lib_erreur\"><input type=text name=\"permalien\" id=\"permalien\" value=\"%s\" size=100 maxlength=100 class=\"form-control\"></td></tr>\n", $gst_url_site, $this -> st_url);
         $this -> a_filtres_parametres["permalien"] = array(array("pattern", "/^https*\:\/\/[\w\.]+\/ark\:\/[\d]+\/[\w]+\/[\w]+$/", "Ce n'est pas un permalien. Merci de lire l'aide en cliquant sur le point d'interrogation"));
         $this -> a_filtres_parametres["date"] = array(array("required", "true", "La date est obligatoire"));
         return $st_chaine;
         } 
    
    public function versChaine()
    
    {
         $st_chaine = '';
         $st_chaine .= sprintf("%s � %s le %s", $this -> st_type_acte, $this -> st_commune, $this -> st_date);
         if ($this -> st_date_rep != '')
             $st_chaine .= sprintf(" (%s)", $this -> st_date_rep);
         $i_nb_lignes = 1;
         $st_chaine .= sprintf(" %s %s\n", $this -> st_cote, $this -> st_libre);
         $c_sexe_intv = null;
         $b_pere_defini = false;
         foreach ($this -> a_liste_personnes as $o_pers)
         {
            switch ($o_pers -> getIdfTypePresence())
             {
            case IDF_PRESENCE_INTV:
                 $c_sexe_intv = $o_pers -> getSexe();
                 $st_chaine .= $o_pers -> versChaine($this -> i_idf_type_acte);
                 break;
             case IDF_PRESENCE_PERE:
                 if ($o_pers -> getPatronyme() != '')
                     {
                    $st_lib = $c_sexe_intv != 'F'? 'Fs':'Fa';
                     $st_chaine .= "$st_lib de: " . $o_pers -> versChaine($this -> i_idf_type_acte);
                     $b_pere_defini = true;
                     } 
                break;
             case IDF_PRESENCE_MERE:
                 if ($o_pers -> getPatronyme() != '')
                     {
                    $st_lib = $c_sexe_intv != 'F'? 'Fs':'Fa';
                     $st_prefixe = $b_pere_defini ? "et de: ": "$st_lib de: ";
                     $st_chaine .= $st_prefixe . $o_pers -> versChaine($this -> i_idf_type_acte);
                     $b_pere_defini = false;
                     } 
                break;
             default:
                 $st_chaine .= $o_pers -> versChaine($this -> i_idf_type_acte);
                 } 
            $i_nb_lignes += $o_pers -> getNbLignes();
             } 
        if (!empty($this -> st_commentaires))
             {
            $this -> st_commentaires = str_replace('�', "\n", $this -> st_commentaires);
             $st_chaine .= $this -> st_commentaires;
             $i_nb_lignes += substr_count($this -> st_commentaires, "\n");;
             } 
        $this -> i_nb_lignes = $i_nb_lignes;
         return $st_chaine;
         }
          
    public function versChaineSansTemoins()
    
    {
         $st_chaine = '';
         $st_chaine .= sprintf("%s � %s le %s", $this -> st_type_acte, $this -> st_commune, $this -> st_date);
         if ($this -> st_date_rep != '')
             $st_chaine .= sprintf(" (%s)", $this -> st_date_rep);
         $i_nb_lignes = 1;
         $st_chaine .= sprintf(" %s %s\n", $this -> st_cote, $this -> st_libre);
         $c_sexe_intv = null;
         $b_pere_defini = false;
         foreach ($this -> a_liste_personnes as $o_pers)
         {
            switch ($o_pers -> getIdfTypePresence())
             {
            case IDF_PRESENCE_INTV:
                 $c_sexe_intv = $o_pers -> getSexe();
                 $st_chaine .= $o_pers -> versChaine($this -> i_idf_type_acte);
                 break;
             case IDF_PRESENCE_PERE:
                 if ($o_pers -> getPatronyme() != '')
                     {
                    $st_lib = $c_sexe_intv != 'F'? 'Fs':'Fa';
                     $st_chaine .= "$st_lib de: " . $o_pers -> versChaine($this -> i_idf_type_acte);
                     $b_pere_defini = true;
                     } 
                break;
             case IDF_PRESENCE_MERE:
                 if ($o_pers -> getPatronyme() != '')
                     {
                    $st_lib = $c_sexe_intv != 'F'? 'Fs':'Fa';
                     $st_prefixe = $b_pere_defini ? "et de: ": "$st_lib de: ";
                     $st_chaine .= $st_prefixe . $o_pers -> versChaine($this -> i_idf_type_acte);
                     $b_pere_defini = false;
                     } 
                break;
             case IDF_PRESENCE_EXCJT:
                 $st_chaine .= $o_pers -> versChaine($this -> i_idf_type_acte);
                 } 
            $i_nb_lignes += $o_pers -> getNbLignes();
             } 
        $this -> i_nb_lignes = $i_nb_lignes;
         return $st_chaine;
         } 
         
    public function versTableauHTML()
    
    {
         $st_chaine = '<table border=1>';
         $st_chaine .= sprintf("<tr><th>Idf</th><td>%d</td>\n", $this -> i_idf);
         $st_chaine .= sprintf("<tr><th>Idf Commune</th><td>%d</td>\n", $this -> i_idf_commune);
         $st_chaine .= sprintf("<tr><th>Idf Source</th><td>%d</td>\n", $this -> i_idf_source);
         $st_chaine .= sprintf("<tr><th>Type</th><td>%s</td>\n", $this -> st_type_acte);
         $st_chaine .= sprintf("<tr><th>Date</th><td>%s</td>\n", $this -> st_date);
         $st_chaine .= sprintf("<tr><th>Date Rep</th><td>%s</td>\n", $this -> st_date_rep);
         $st_chaine .= sprintf("<tr><th>Url</th><td>%s</td>\n", $this -> st_url);
         $st_chaine .= sprintf("<tr><th>Cmt</th><td>%s</td>\n", $this -> st_commentaires);
         $st_chaine .= '</table>';
         foreach ($this -> a_liste_personnes as $o_pers)
         {
            $st_chaine .= $o_pers -> versTableauHTML();
             } 
        return $st_chaine;
         } 
    
    /**
     * Renvoie le formulaire d'�dition d'un acte
     */
    public function formulaire_liste_personnes()
    
    
    {
         $i_idf_type_acte = $this -> typeActe -> vers_idf($this -> st_type_acte);
         // les actes divers correspondent � une grille de mariage �labor�e dans Nim�gue
        $a_grille = array_key_exists($i_idf_type_acte, $this -> ga_grille_saisie) ? $this -> ga_grille_saisie[$i_idf_type_acte]: $this -> ga_grille_saisie[IDF_MARIAGE] ;
         $st_chaine = "";
         $i = 0;
         $a_liste_personnes = $this -> a_liste_personnes;
         $st_idf_patro_intv = null;
         $i_nb_intv = 0;
         $i_nb_temoins = 0;
         foreach ($a_grille as $i_idf_type_presence)
         {
            switch ($i_idf_type_presence)
             {
            case IDF_PRESENCE_INTV:
                 $i_nb_intv++;
                 switch ($this -> i_idf_type_acte)
                 {
                case IDF_MARIAGE:
                     $st_lib = $i_nb_intv % 2 == 0 ? "Epouse": "Epoux";
                     break;
                 default:
                     $st_lib = "Intervenant $i_nb_intv";
                     } 
                $st_chaine .= "<tr class=\"bg-primary\"><td colspan=8>$st_lib</td></tr>";
                 break;
             case IDF_PRESENCE_TEMOIN;
                     $i_nb_temoins++;
                     if ($i_nb_temoins == 1)
                         $st_chaine .= "<tr class=\"bg-primary\"><td colspan=8>T&eacute;moins</td></tr>";
                     break;
                 case IDF_PRESENCE_PARRAIN;
                     $st_chaine .= "<tr class=\"bg-primary\"><td colspan=8>Parrain/Marraine</td></tr>";
                     break;
                     } 
                if (count($a_liste_personnes) > 0 && $a_liste_personnes[0] -> getIdfTypePresence() == $i_idf_type_presence)
                     {
                // la personne existe d�j� dans la BD
                $o_pers = array_shift($a_liste_personnes);
                 $o_pers -> setNumParam($i);
                 if ($i_idf_type_presence == IDF_PRESENCE_INTV)
                     $st_idf_patro_intv = $o_pers -> getIdfPatro();
                 $st_chaine .= $o_pers -> formulaire_personne ($i_idf_type_acte, $this -> st_commune_insee, $st_idf_patro_intv);
                 } 
            else
                 {
            // personne vide dans le type de pr�sence attendu doit �tre cr��
            $o_pers = new Personne($this -> connexionBD, $this -> i_idf, null, null, null, null);
             $o_pers -> setIdfTypePresence($i_idf_type_presence);
             $o_pers -> setNumParam($i);
             $st_chaine .= $o_pers -> formulaire_personne ($i_idf_type_acte, $this -> st_commune, $st_idf_patro_intv);
             } 
        $this -> a_params_completion_auto = array_merge($this -> a_params_completion_auto, $o_pers -> parametres_completion_auto());
         $i++;
         } 
    return $st_chaine;
     } 

/**
 * Renvoie un formulaire HTML d'�dition du bas d'un acte
 * 
 * @return string bas du formulaire de l'acte
 */
public function formulaire_bas_acte()


{
     $st_chaine = "<tr class=\"bg-primary\"><td colspan=8>Commentaires g&eacute;n&eacute;raux sur l'acte</td></tr>";
     $st_chaine .= sprintf("<tr><td colspan=8><div class=\"text-center\"><textarea name=cmt_acte rows=10 cols=80>%s</textarea></div></td></tr>", str_replace('�', "\n", $this -> st_commentaires));
     return $st_chaine;
     } 

/**
 * Renvoie l'�cran d'affichage du permalien si d�fini
 * 
 * @param  $pi_hauteur integer hauteur en points de l'image
 * @param  $pi_largeur integer largeur en points de l'image
 * @return string chaine du permalien
 */
public function affichage_image_permalien($pi_hauteur = 800, $pi_largeur = 800)


{
     $st_caveat = "<div class=\"text-center\" >Si un message indiquant qu'une  licence est  n�cessaire, merci de l'accepter en cliquant sur \"J'ai pris connaissance des informations ci-dessus et j'accepte les conditions\" et rafra&icirc;chir la page en appuyant sur la touche F5 du clavier</div>";
     if (!empty($this -> st_url))
         {
        $st_chaine = '<div class="text-center">';
         $st_chaine .= sprintf('<iframe name="image_permalien" id="image_permalien" scrolling="auto" height="%dpx" width="%dpx" src="%s" ></iframe>', $pi_hauteur, $pi_largeur, $this -> st_url);
         $st_chaine .= '</div>';
         $st_chaine .= "$st_caveat";
         return $st_chaine;
         } 
    else
         return "";
     } 

/**
 * renvoie la chaine jquery des fonctions d'autocompl�tion
 */
public function fonctions_jquery_completion()


{
     global $gst_url_site;
     $st_chaine = "";
     foreach ($this -> a_params_completion_auto as $st_param => $a_fonction_ajax)
     {
        list($st_fonction, $i_nb_cars) = $a_fonction_ajax;
         $st_chaine .= "$('#$st_param').autocomplete({\n";
         $st_chaine .= "\tsource : '$gst_url_site/ajax/$st_fonction',\n";
         $st_chaine .= "\tminLength: $i_nb_cars\n";
         $st_chaine .= "});\n\n";
         } 
    return $st_chaine;
     } 

/**
 * Met � jour la liste des personnes d'un acte � partir d'un formulaire
 * 
 * @param integer $pi_idf_source identifiant de la source
 * @param integer $pi_idf_commune_acte identifiant de la commune
 * @param object $ punion Objet de type union
 */
public function maj_liste_personnes($pi_idf_source, $pi_idf_commune_acte, $punion)


{
     $i_idf_type_acte = $this -> typeActe -> vers_idf($this -> st_type_acte);
     $a_grille_personnes = array_key_exists($i_idf_type_acte, $this -> ga_grille_saisie) ? $this -> ga_grille_saisie[$i_idf_type_acte]: $this -> ga_grille_saisie[IDF_MARIAGE] ;
     $a_sexe_personne = array_key_exists($i_idf_type_acte, $this -> ga_sexe_personne) ? $this -> ga_sexe_personne[$i_idf_type_acte]: $this -> ga_sexe_personne[IDF_MARIAGE] ;
     $i_num_parametres = count($a_grille_personnes);
     $i = 0;
     $a_liste_personnes = array();
     // suppression des pr�cedentes personnes et unions
    $this -> connexionBD -> execute_requete("DELETE FROM `personne` where idf_acte=" . $this -> i_idf);
     $this -> connexionBD -> execute_requete("DELETE FROM `union` where idf_acte=" . $this -> i_idf);
     // cr�ation des personnes
    $c_sexe_intv = '';
     foreach ($a_grille_personnes as $i_idf_type_presence)
     {
        $o_pers = new Personne($this -> connexionBD, $this -> i_idf, $i_idf_type_presence, $a_sexe_personne[$i], null, null);
         $o_pers -> setNumParam($i);
         $o_pers -> initialise_depuis_formulaire($this -> i_idf, $i_idf_type_presence);
         if ($o_pers -> a_infos())
             $this -> a_infos = $o_pers -> a_infos();
         if ($i_idf_type_presence == IDF_PRESENCE_INTV)
             $c_sexe_intv = $o_pers -> getSexe();
         else if ($i_idf_type_presence == IDF_PRESENCE_EXCJT)
         {
            switch ($c_sexe_intv)
             {
            case 'M': $o_pers -> setSexe('F');
                 break;
             case 'F': $o_pers -> setSexe('M');
                 break;
             case '?': $o_pers -> setSexe('?');
                 break;
             default: $o_pers -> setSexe('?');
                 } 
            } 
        else
             $o_pers -> setSexe($a_sexe_personne[$i]);
         $a_liste_personnes[$i] = $o_pers;
         $i++;
         } 
    // cr�ation des parents
    $a_parents = array_key_exists($i_idf_type_acte, $this -> ga_parents) ? $this -> ga_parents[$i_idf_type_acte]: $this -> ga_parents[IDF_MARIAGE];
     foreach ($a_parents as $i_idf_intv => $a_idx_parents)
     {
        list($i_idx_pere, $i_idx_mere) = $a_idx_parents;
         if ($a_liste_personnes[$i_idx_pere] -> getPatronyme() != '')
             $a_liste_personnes[$i_idf_intv] -> setIdfPere($a_liste_personnes[$i_idx_pere] -> getIdf());
         if ($a_liste_personnes[$i_idx_mere] -> getPatronyme() != '')
             $a_liste_personnes[$i_idf_intv] -> setIdfMere($a_liste_personnes[$i_idx_mere] -> getIdf());
         }
	// sauvegarde des nouvelles communes, professions et prenoms
	if (count($a_liste_personnes)>0)
	{	
		$a_liste_personnes[0]->sauveCommunePersonne();
		$a_liste_personnes[0]->sauveProfession();
		$a_liste_personnes[0]->sauvePrenom();
    }
	// sauvegarde des personnes
    foreach ($a_liste_personnes as $o_pers)
     {
        $o_pers -> cree();
         } 
    // cr�ation des couples
    $a_couples = array_key_exists($i_idf_type_acte, $this -> ga_grille_couples) ? $this -> ga_grille_couples[$i_idf_type_acte]: $this -> ga_grille_couples[IDF_MARIAGE];
     foreach ($a_couples as $a_couple)
     {
        list($i_idf_cjt, $i_idf_cjte) = $a_couple;
         if ($a_liste_personnes[$i_idf_cjt] -> getPatronyme() != '' && $a_liste_personnes[$i_idf_cjte] -> getPatronyme() != '')
             {
            if ($a_liste_personnes[$i_idf_cjt] -> getSexe() == 'M' && $a_liste_personnes[$i_idf_cjte] -> getSexe() == 'F')
                 {
                // Union � d�finir
                $punion -> cree($this -> i_idf_source, $this -> i_idf_commune, $this -> i_idf, $this -> i_idf_type_acte, $a_liste_personnes[$i_idf_cjt] -> getIdf(), $a_liste_personnes[$i_idf_cjt] -> getPatronyme(), $a_liste_personnes[$i_idf_cjte] -> getIdf(), $a_liste_personnes[$i_idf_cjte] -> getPatronyme());
                 } 
            else if ($a_liste_personnes[$i_idf_cjt] -> getSexe() == 'F' && $a_liste_personnes[$i_idf_cjte] -> getSexe() == 'M')
                 {
                $punion -> cree($this -> i_idf_source, $this -> i_idf_commune, $this -> i_idf, $this -> i_idf_type_acte, $a_liste_personnes[$i_idf_cjte] -> getIdf(), $a_liste_personnes[$i_idf_cjte] -> getPatronyme(), $a_liste_personnes[$i_idf_cjt] -> getIdf(), $a_liste_personnes[$i_idf_cjt] -> getPatronyme());
                 } 
            } 
        } 
    } 

/**
 * Renvoie l'ent�te de l'acte au format Nim�gue V3
 */
public function colonnes_entete_nimv3()


{
     switch ($this -> i_idf_type_acte)
     {
    case IDF_NAISSANCE:
         return array('NIMEGUEV3', $this -> i_code_commune, $this -> st_commune, $this -> i_dept, '', 'N', $this -> st_date, $this -> st_date_rep, $this -> st_cote, $this -> st_libre);
         break;
    
     case IDF_DECES:
         return array('NIMEGUEV3', $this -> i_code_commune, $this -> st_commune, $this -> i_dept, '', 'D', $this -> st_date, $this -> st_date_rep, $this -> st_cote, $this -> st_libre);
         break;
    
     case IDF_MARIAGE:
         return array('NIMEGUEV3', $this -> i_code_commune, $this -> st_commune, $this -> i_dept, '', 'M', $this -> st_date, $this -> st_date_rep, $this -> st_cote, $this -> st_libre);
         break;
    
     default:
         // acte divers
        return array('NIMEGUEV3', $this -> i_code_commune, $this -> st_commune, $this -> i_dept, '', 'V', $this -> st_date, $this -> st_date_rep, $this -> st_cote, $this -> st_libre, $this -> st_sigle_type_acte_nimegue, $this -> st_type_acte);
        
         } 
    } 

/**
 * Renvoie la liste nimegue des personnes
 */
public function liste_personnes_nimv3()


{
     $i_idf_type_acte = $this -> typeActe -> vers_idf($this -> st_type_acte);
     // les actes divers correspondent � une grille de mariage �labor�e dans Nim�gue
    $a_grille = array_key_exists($i_idf_type_acte, $this -> ga_grille_saisie) ? $this -> ga_grille_saisie[$i_idf_type_acte]: $this -> ga_grille_saisie[IDF_MARIAGE] ;
     $a_champs = array();
     $i = 0;
     $a_liste_personnes = $this -> a_liste_personnes;
     $st_idf_patro_intv = null;
     foreach ($a_grille as $i_idf_type_presence)
     {
        if (count($a_liste_personnes) > 0 && $a_liste_personnes[0] -> getIdfTypePresence() == $i_idf_type_presence)
             {
            // la personne existe d�j� dans la BD
            $o_pers = array_shift($a_liste_personnes);
             $a_champs = array_merge($a_champs, $o_pers -> colonnes_nimv3($i_idf_type_acte));
             } 
        else
             {
            // personne vide dans le type de pr�sence attendu doit �tre cr��
            $o_pers = new Personne($this -> connexionBD, $this -> i_idf, null, null, null, null);
             $o_pers -> setIdfTypePresence($i_idf_type_presence);
             $a_champs = array_merge($a_champs, $o_pers -> colonnes_nimv3($i_idf_type_acte));
             } 
        } 
    return $a_champs;
     } 

/**
 * Initialise les variables de sessions
 */
public function intialise_variables_sessions ()


{
     $_SESSION["idf_commune"] = $this -> i_idf_commune;
     $_SESSION["idf_releveur"] = $this -> i_idf_releveur;
     $_SESSION["idf_source"] = $this -> i_idf_source;
     $_SESSION["date"] = $this -> st_date;
     $_SESSION["date_rep"] = $this -> st_date_rep;
     $_SESSION["cote"] = $this -> st_cote;
     $_SESSION["libre"] = $this -> st_libre;
     $_SESSION["url"] = $this -> st_url;
     $_SESSION["type_acte"] = $this -> st_type_acte;
     $_SESSION["commentaires"] = $this -> st_commentaires;
     foreach ($this -> a_liste_personnes as $o_pers)
     {
        $o_pers -> intialise_variables_sessions();
         } 
    } 

/**
 * Charge l'objet � partir des variables de session
 * 
 * @param integer $pi_num_parametre num�ro de param�tre
 */
public function charge_variables_sessions()


{
     $this -> i_idf_commune = isset($_SESSION["idf_commune"]) ? $_SESSION["idf_commune"] : $this -> i_idf_commune;
     $this -> i_idf_releveur = isset($_SESSION["idf_releveur"]) ? $_SESSION["idf_releveur"] : $this -> i_idf_releveur;
     $this -> i_idf_source = isset($_SESSION["idf_source"]) ? $_SESSION["idf_source"] : $this -> i_idf_source;
     $this -> st_date = isset($_SESSION["date"]) ? $_SESSION["date"] : $this -> st_date;
     $this -> st_date_rep = isset($_SESSION["date_rep"]) ? $_SESSION["date_rep"] : $this -> st_date_rep;
     $this -> st_cote = isset($_SESSION["cote"]) ? $_SESSION["cote"] : $this -> st_cote;
     $this -> st_libre = isset($_SESSION["libre"]) ? $_SESSION["libre"] : $this -> st_libre;
     $this -> st_url = isset($_SESSION["url"]) ? $_SESSION["url"] : $this -> st_url;
     $this -> st_type_acte = isset($_SESSION["type_acte"]) ? $_SESSION["type_acte"] : $this -> st_type_acte;
     $this -> st_commentaires = isset($_SESSION["commentaires"]) ? $_SESSION["commentaires"] : $this -> st_commentaires;
     $a_grille = array_key_exists($this -> i_idf_type_acte, $this -> ga_grille_saisie) ? $this -> ga_grille_saisie[$this -> i_idf_type_acte] : $this -> ga_grille_saisie[IDF_MARIAGE];
     $i_nb_personnes = count($a_grille);
     // une TD peut avoir �t� compl�t�e => il faut charger la grille correspondant � l'acte
    $a_grille = array_key_exists($this -> i_idf_type_acte, $this -> ga_grille_saisie) ? $this -> ga_grille_saisie[$this -> i_idf_type_acte]: $this -> ga_grille_saisie[IDF_MARIAGE] ;
     $i = 0;
     $this -> a_liste_personnes = array();
     foreach ($a_grille as $i_idf_type_presence)
     {
        // personne vide dans le type de pr�sence attendu doit �tre cr��
        $o_pers = new Personne($this -> connexionBD, $this -> i_idf, null, null, null, null);
         $o_pers -> setIdfTypePresence($i_idf_type_presence);
         $o_pers -> setNumParam($i);
         $o_pers -> charge_variables_sessions();
         $i++;
         $this -> a_liste_personnes[] = $o_pers;
         } 
    } 

/**
 * Supprimer les variables de session
 */
public function detruit_variables_sessions()


{
     unset($_SESSION["idf_commune"]);
     unset($_SESSION["idf_releveur"]);
     unset($_SESSION["idf_source"]);
     unset($_SESSION["date"]);
     unset($_SESSION["date_rep"]);
     unset($_SESSION["cote"]);
     unset($_SESSION["libre"]);
     unset($_SESSION["url"]);
     unset($_SESSION["type_acte"]);
     unset($_SESSION["commentaires"]);
     $a_grille = array_key_exists($this -> i_idf_type_acte, $this -> ga_grille_saisie) ? $this -> ga_grille_saisie[$this -> i_idf_type_acte] : $this -> ga_grille_saisie[IDF_MARIAGE];
     $i_nb_personnes = count($a_grille);
     foreach ($this -> a_liste_personnes as $o_pers)
     {
        $o_pers -> detruit_variables_sessions();
         } 
    } 
} 
?>