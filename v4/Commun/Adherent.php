<?php

class Adherent
{
   function __autoload($class_name)
   {
      require_once $class_name . '.php';
   }
   
   protected $connexionBD; 
   protected $st_ident_modificateur;     
   protected $i_idf;
   protected $st_nom;
   protected $st_prenom;
   protected $st_ident;
   protected $st_mdp;
   protected $st_email_perso;
   protected $st_email_forum;
   protected $st_tel;
   protected $st_adresse1;
   protected $st_adresse2;
   protected $st_code_postal;
   protected $st_ville;
   protected $st_pays;
   protected $b_confidentiel;
   protected $st_date_premiere_adhesion;
   protected $st_statut;
   protected $st_derniere_connexion;
   protected $st_site;
   protected $st_infos_agc;
   protected $st_date_paiement;
   protected $i_prix;
   protected $i_annee_cotisation;
   protected $st_ip_connexion;
   protected $st_ip_restreinte;
   protected $i_aide;
   protected $i_origine;
   protected $st_origine;
   protected $st_jeton_paiement;
   protected $i_max_nai;
   protected $i_max_mar_div;
   protected $i_max_dec;
   protected $a_filtres_parametres;
   protected $a_droits_adherents;
   protected $i_clef_nouveau_mdp; 
   private static $gst_url_gbk = 'https://www.geneabank.org/cgi-bin/gbk_sql.pl'; 
   protected static $st_id_session_gbk;
   protected static $st_erreur_gbk;   
     
   public function __construct($pconnexionBD,$pi_idf_adherent)
   {
      global $gst_nom_bd,$gst_time_zone;
      date_default_timezone_set($gst_time_zone);
      $this -> connexionBD = $pconnexionBD;
      $this->st_ident_modificateur = isset($_SESSION['ident']) ?  $_SESSION['ident'] : '';
      $this->a_filtres_parametres = array();
      $this->a_droits_adherents = array();
      if (empty($pi_idf_adherent))
      {
         $i_idf_dernier_adherent = $this -> connexionBD->sql_select1("select max(idf) from adherent");
         $i_idf_dernier_adherent++;
         $this -> i_idf =$i_idf_dernier_adherent;
         $this->st_ident=$i_idf_dernier_adherent;
         $this->st_date_premiere_adhesion = date("d/m/Y");
         $this->st_date_paiement= date("d/m/Y");
         $aujourdhui = getdate();
         $this->i_annee_cotisation = ($aujourdhui['mon']>9) ? $aujourdhui['year'] +1 : $aujourdhui['year'];
         $this->st_mdp=self::mdp_alea();
         $this->st_pays='France';
         $this->b_confidentiel=true; 
         $this->i_max_nai=$this -> connexionBD->sql_select1("select Column_Default from Information_Schema.Columns WHERE Table_Schema = '".$gst_nom_bd."' AND Table_Name = 'adherent' AND Column_Name = 'max_nai'");
         $this->i_max_mar_div=$this -> connexionBD->sql_select1("select Column_Default from Information_Schema.Columns WHERE Table_Schema = '".$gst_nom_bd."' AND Table_Name = 'adherent' AND Column_Name = 'max_mar_div'");
         $this->i_max_dec=$this -> connexionBD->sql_select1("select Column_Default from Information_Schema.Columns WHERE Table_Schema = '".$gst_nom_bd."' AND Table_Name = 'adherent' AND Column_Name = 'max_dec'");
         $this->st_jeton_paiement='';
         $this->i_clef_nouveau_mdp=0;
      }
      else
      {
        $this -> i_idf =$pi_idf_adherent;  
        $this->connexionBD->initialise_params(array(':idf'=>$this -> i_idf));
        list($st_statut,$st_nom,$st_prenom,$st_adr1,$st_adr2,$st_code_postal,$st_ville,$st_pays,$st_tel,$st_email_perso,$st_email_forum,$st_site,$st_confidentiel,$st_ident_adh,$i_aide,$i_origine,$st_origine,$st_infos_agc,$st_date_premiere_adhesion,$st_date_paiement,$i_prix,$i_annee_cotisation,$st_ip_connexion,$st_ip_restreinte,$st_jeton_paiement,$i_max_nai,$i_max_mar_div,$i_max_dec,$i_clef_nouveau_mdp)=$this -> connexionBD->sql_select_liste("select adherent.statut,adherent.nom,prenom, adr1, adr2, cp, ville, pays,tel,email_perso,email_forum,site,confidentiel,ident,aide,type_origine,description_origine,infos_agc,date_format(date_premiere_adhesion,'%d/%m/%Y'),date_format(date_paiement,'%d/%m/%Y'),prix, annee_cotisation,ip_connexion,ip_restreinte,jeton_paiement,max_nai,max_mar_div,max_dec,clef_nouveau_mdp from adherent where adherent.idf=:idf");
        $this->st_statut=$st_statut;
        $this->st_nom=$st_nom;
        $this->st_prenom=$st_prenom;
        $this->st_adresse1=$st_adr1;
        $this->st_adresse2=$st_adr2;
        $this->st_code_postal=$st_code_postal;
        $this->st_ville=$st_ville;
        $this->st_pays=$st_pays;
        $this->st_tel=$st_tel;
        $this->st_email_perso=$st_email_perso;
        $this->st_email_forum=$st_email_forum;
        $this->st_site=$st_site;
        $this->b_confidentiel=$st_confidentiel=='O'? true: false;
        $this->st_ident=$st_ident_adh;
        $this->i_aide=$i_aide;
        $this->i_origine=$i_origine;
        $this->st_origine=$st_origine;
        $this->st_infos_agc=$st_infos_agc;
        $this->st_date_premiere_adhesion=$st_date_premiere_adhesion;
        $this->st_date_paiement=$st_date_paiement;
        $this->i_prix=$i_prix;
        $this->i_annee_cotisation=$i_annee_cotisation;
        $this->st_ip_connexion=$st_ip_connexion;
        $this->st_ip_restreinte=$st_ip_restreinte;
        $this->st_jeton_paiement=$st_jeton_paiement;
        $this->i_max_nai=$i_max_nai;
        $this->i_max_mar_div=$i_max_mar_div;
        $this->i_max_dec=$i_max_dec;
        $this->a_droits_adherents = $this -> connexionBD->sql_select("select droit from privilege where idf_adherent=$pi_idf_adherent");
        $this->i_clef_nouveau_mdp=$i_clef_nouveau_mdp;
      }
      if ($this->st_ident_modificateur==$this->st_ident)
      {
         $this -> a_filtres_parametres["ident_adh"] = array(array("required", "true", "L'identifiant est obligatoire",""),array("pattern", "/^\w+$/", "L'identifiant ne doit contenir que des lettres et des chiffres",""),array("maxlength", 12, "L'identifiant contient au maximum 12 caract�res",""));
          $this -> a_filtres_parametres["mdp_adh"] = array(array("required", "true", "Le mot de passe est obligatoire",""),array("pattern", "/^\w+$/", "Le mot de passe ne doit contenir que des lettres et des chiffres",""),array("maxlength", 12, "L'identifiant contient au maximum 12 caract�res",""));
      }
      $this -> a_filtres_parametres["nom"] = array(array("required", "true", "Le patronyme est obligatoire",""));
      $this -> a_filtres_parametres["prenom"] = array(array("required", "true", "Le pr�nom est obligatoire",""));
      $this -> a_filtres_parametres["adresse1"] = array(array("required", "true", "L'adresse est vide. Remplir la premi�re ligne",""));
      $this -> a_filtres_parametres["code_postal"] = array(array("required", "true", "Le code postal est obligatoire",""));
      $this -> a_filtres_parametres["ville"] = array(array("required", "true", "La ville est obligatoire",""));
      $this -> a_filtres_parametres["email_forum"] = array(array("required", "true", "L'email est obligatoire",""),
                                                            array("email","true","Ce n'est pas un email","")
                                                      );
      $this -> a_filtres_parametres["site_adht"] = array(array("url", "true", "Ceci n'est pas l'adresse d'un site",""));
      $this -> a_filtres_parametres["email_perso"] = array(array("required", "true", "L'email est obligatoire",""),
                                                            array("email","true","Ce n'est pas un email","")
                                                      );
      $this->a_filtres_parametres["date_premiere_adhesion"] = array(array("dateITA", "true", "Ce n'est pas une date",""));
      $this->a_filtres_parametres["date_paiement"] = array(array("required", "true", "La date de paiement est obligatoire",""),
                                                                      array("dateITA", "true", "Ce n'est pas une date","")
                                                                );
      $this->a_filtres_parametres["prix"] = array(array("required", "true", "Le prix est obligatoire",""),
                                                    array("number", "true", "Le prix est un entier",""),
                                                    array("cotisation_statut","true","la cotisation n'est pas conforme au statut","$('#statut_adherent option:selected').text()")
                                                   );
      $this->a_filtres_parametres["annee_cotisation"] = array(array("required", "true", "L'ann�e de cotisation est obligatoire",""),
                                                    array("number", "true", "L'ann�e de cotisation est un entier","")
                                                   );
      $this->a_filtres_parametres["ip_restreinte"] = array(array("ipv4", "true", "Ceci n'est pas une adresse  IP",""));
      $this->a_filtres_parametres["max_nai"] = array(array("required", "true", "Le quota de naissance est obligatoire",""),
                                                    array("number", "true", "Le quota de naissance est un entier","")
                                                   );
      $this->a_filtres_parametres["max_mar_div"] = array(array("required", "true", "Le quota de mariage/divers est obligatoire",""),
                                                    array("number", "true", "Le quota de mariage/divers est un entier","")
                                                   );
      $this->a_filtres_parametres["max_dec"] = array(array("required", "true", "Le quota de d�c�s est obligatoire",""),
                                                    array("number", "true", "Le quota de d�c�s est un entier","")
                                                   );                                                                                          
     
     self::$st_erreur_gbk='';                                                                                                                                                                                                                                                                                                   
   }
   
   /**
    *  Renvoie le nom de l'adh�rent
    */
    public function getNom() 
    {
       return $this->st_nom;
    }
   
   /**
    *  Renvoie le pr�nom de l'adh�rent
    */
    public function getPrenom() 
    {
       return $this->st_prenom;
    }
    
     /**
    *  Renvoie l'email perso de l'adh�rent
    */
    public function getEmailPerso() 
    {
       return $this->st_email_perso;
    }
    
    
	  /**
    *  Renvoie le statut de l'adh�rent
    */
    public function getStatut() 
    {
       return $this->st_statut;
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
    * Initialise l'adh�rent depuis une formulaire post

   */
   public function initialise_depuis_formulaire()
   {
      $this->i_idf = isset($_POST['idf_adht']) ? (int) $_POST['idf_adht'] : 0;
      if (get_magic_quotes_gpc())
      {
         if (ini_get('magic_quotes_sybase'))
         {
            $this->st_nom = substr(trim($_POST['nom']),0,40);
            $this->st_prenom = substr(trim($_POST['prenom']),0,30);
            $this->st_adresse1 = substr(trim($_POST['adresse1']),0,40);
            $this->st_adresse2 = substr(trim($_POST['adresse2']),0,40);            
            $this->st_code_postal = substr(trim($_POST['code_postal']),0,12);
            $this->st_ville = substr(trim($_POST['ville']),0,40); 
            $this->st_pays = substr(trim($_POST['pays']),0,40);   
            $this->st_tel = substr(trim($_POST['tel']),0,15);            
            $this->st_infos_agc = isset($_POST['infos_agc']) ? trim($_POST['infos_agc']) : '';
            $this->st_origine = isset($_POST['description_origine']) ?   trim($_POST['description_origine']) : ''; 
         }
         else
         {
            $this->st_nom = stripslashes(substr(trim($_POST['nom']),0,40));
            $this->st_prenom = stripslashes(substr(trim($_POST['prenom']),0,30));
            $this->st_adresse1 = stripslashes(substr(trim($_POST['adresse1']),0,40));
            $this->st_adresse2 = stripslashes(substr(trim($_POST['adresse2']),0,40));            
            $this->st_code_postal = stripslashes(substr(trim($_POST['code_postal']),0,12));
            $this->st_ville = stripslashes(substr(trim($_POST['ville']),0,40));    
            $this->st_pays = stripslashes(substr(trim($_POST['pays']),0,40));
            $this->st_tel = stripslashes(substr(trim($_POST['tel']),0,15));
            $this->st_infos_agc = isset($_POST['infos_agc']) ? stripslashes(trim($_POST['infos_agc'])): '';
            $this->st_origine = isset($_POST['description_origine']) ?   stripslashes(trim($_POST['description_origine'])) : '';  
         }
      }
      else
      { 
         $this->st_nom = substr(trim($_POST['nom']),0,40);
         $this->st_prenom = substr(trim($_POST['prenom']),0,30);
         $this->st_adresse1 = substr(trim($_POST['adresse1']),0,40);
         $this->st_adresse2 = substr(trim($_POST['adresse2']),0,40);            
         $this->st_code_postal = substr(trim($_POST['code_postal']),0,12);
         $this->st_ville = substr(trim($_POST['ville']),0,40); 
         $this->st_pays = substr(trim($_POST['pays']),0,40);   
         $this->st_tel = substr(trim($_POST['tel']),0,15);
         $this->st_infos_agc = isset($_POST['infos_agc']) ?  trim($_POST['infos_agc']): '';
         $this->st_origine = isset($_POST['description_origine']) ? trim($_POST['description_origine']) : '';    
      } 
      if (strlen($this->st_tel)==10)         
        $this->st_tel = wordwrap($this->st_tel,2,' ',true);   
      $this->st_email_perso = isset($_POST['email_perso']) ? substr(trim($_POST['email_perso']),0,60): '';
      $this->st_email_forum = isset($_POST['email_forum']) ? substr(trim($_POST['email_forum']),0,60): '';
      $this->st_site = substr(trim($_POST['site_adht']),0,80);
      $confidentiel=isset($_POST['confidentiel']) ? trim($_POST['confidentiel']) : 'O';      
      $this->b_confidentiel= ($confidentiel=='O')? true: false;
      if (isset($_POST['statut_adherent'])) $this->st_statut=$_POST['statut_adherent']; 
      $this->st_ident = isset($_POST['ident_adh']) ? substr(trim($_POST['ident_adh']),0,12):'';
      $this->st_date_paiement = isset($_POST['date_paiement']) ? trim($_POST['date_paiement']) : '';
      $this->i_prix = isset($_POST['prix']) ? (int) trim($_POST['prix']) : 0;
      $this->st_date_premiere_adhesion = isset($_POST['date_premiere_adhesion']) ? trim($_POST['date_premiere_adhesion']): 0;       
      if (isset($_POST['annee_cotisation']))  $this->i_annee_cotisation = (int) trim($_POST['annee_cotisation']);
      $this->st_ip_restreinte = isset($_POST['ip_restreinte']) ? trim($_POST['ip_restreinte']):'';
      $this->i_max_nai = isset($_POST['max_nai']) ? (int) trim($_POST['max_nai']): 0;
      $this->i_max_mar_div = isset($_POST['max_mar_div']) ? (int) trim($_POST['max_mar_div']):0;
      $this->i_max_dec = isset($_POST['max_dec']) ?(int) trim($_POST['max_dec']):0;
      $a_aide = isset($_POST['aide']) ? $_POST['aide']: array();
      $this->i_aide = array_sum($a_aide);
      $this->i_origine = isset($_POST['type_origine']) ?  (int) $_POST['type_origine'] : 0; 
      $this->a_droits_adherents = isset($_POST['droits']) ? $_POST['droits'] : array(); 
   }
        
   /**
   * Renvoie un formulaire HTML d'�dition des informations personnelles
   * @param boolean $pb_gestionnaire l'utilisateur connect� est-il un gestionnaire ou pas ?
   */
   public function formulaire_infos_personnelles($pb_gestionnaire)
   {
      global $ga_pays;
      print(sprintf("<input type=\"hidden\" id=\"idf_adht\" name=\"idf_adht\" value=\"%d\">",$this -> i_idf));
      $st_chaine = '<table border=1>';
      if (a_droits($this->st_ident_modificateur,DROIT_GESTION_ADHERENT))
      {
        $st_chaine .= sprintf("<tr><th>N� d'adh&eacute;rent :  <input type=\"text\" value=\"%d\" size=5 readonly></th><td><select name=statut_adherent id=statut_adherent>",$this -> i_idf);
        $a_statuts_adherents = $this -> connexionBD->liste_valeur_par_clef("select idf,nom from statut_adherent order by nom");
        $st_chaine .=chaine_select_options($this->st_statut,$a_statuts_adherents);
        $st_chaine .= '</select></td></tr>';
      }
      else 
      {
        $this -> connexionBD->initialise_params(array(':statut'=>$this->st_statut)); 
        $st_statut = $this -> connexionBD->sql_select1("select nom from statut_adherent where idf=:statut");
        $st_chaine .= sprintf("<tr><th>N� d'adh&eacute;rent : <input type=\"text\" value=\"%d\" size=5 readonly></th><td>%s</td></tr>",$this -> i_idf,$this->st_ident);
        $st_chaine .= sprintf("<tr><th>Ann&eacute;e de cotisation : </th><td> <input type=\"text\" value=\"%04d\" id=statut_adherent size=5 data-value=\"%s\" readonly> (%s)</td></tr>",$this->i_annee_cotisation,$this->st_statut,$st_statut); 
      }
      if ($this->st_ident_modificateur==$this->st_ident)
      {
        $st_readonly = $pb_gestionnaire ? 'readonly' : '';
        // L'administrateur n'est pas suppos� changer l'identifiant d'un utilisateur
        $st_chaine .= sprintf("<tr><th>Votre identifiant (base AGC): </th><td><input type=\"text\" maxlength=12 size=8 name=ident_adh id=ident_adh value=\"%s\" $st_readonly></td></tr>",$this->st_ident);
        $st_chaine .= sprintf("<tr><th>Votre identifiant G&eacute;n&eacute;bank : </th><td><input type=\"text\" value=\"".PREFIXE_ADH_GBK."%04d\" size=8 readonly></td></tr>",$this -> i_idf);
      }   
      $st_chaine .= sprintf("<tr><th>Nom</th><td><input type=\"text\" maxlength=20 size=20 name=nom value=\"%s\" id=\"nom\" class=\"majuscule\"></td></tr>",$this->st_nom);      
      $st_chaine .= sprintf("<tr><th>Pr&eacute;nom</th><td><input type=\"text\" maxlength=30 size=20 name=prenom value=\"%s\" id=\"prenom\" class=\"capitale\"></td></tr>",$this->st_prenom);      
      $st_chaine .= sprintf("<tr><th>Adresse 1</th><td><input type=\"text\" maxlength=40 size=40 name=adresse1 id=adresse1 value=\"%s\"></td></tr>",$this->st_adresse1);    
      $st_chaine .= sprintf("<tr><th>Adresse 2</th><td><input type=\"text\" maxlength=40 size=40 name=adresse2 value=\"%s\"></td></tr>",$this->st_adresse2);
      $st_chaine .= sprintf("<tr><th>Code Postal</th><td><input type=\"text\" maxlength=12 size=12 name=code_postal id=code_postal value=\"%s\"></td></tr>",$this->st_code_postal);      
      $st_chaine .= sprintf("<tr><th>Localit&eacute;</th><td><input type=\"text\" maxlength=40 size=20 name=ville id=\"ville\" value=\"%s\"></td></tr>", $this->st_ville);     
      $st_chaine .= "<tr><th>Pays</th><td><select name=\"pays\" class=\"js-select-avec-recherche\">".chaine_select_options_simple($this->st_pays,$ga_pays)."</select></td></tr>";
      $st_chaine .= sprintf("<tr><th>Email forum</th><td><input type=\"text\" maxlength=60 size=40 name=email_forum value=\"%s\" id=email_forum></td></tr>",$this->st_email_forum);
      
      $st_chaine .= sprintf("<tr><th>Site web</th><td><input type=\"text\" maxlength=60 size=40 name=site_adht id=site_adht value=\"%s\"></td></tr>", $this->st_site);

      $st_checked =$this->b_confidentiel ? "checked": '';
      $st_chaine .= "<tr><td colspan=2><input type=\"checkbox\" name=confidentiel value=\"O\" $st_checked />(Cochez et l'adresse devient invisible aux adh�rents)</td></tr>";
      $st_chaine .= "<tr><td colspan=2>Donn&eacute;es accessibles uniquement aux gestionnaires de l'AGC</td></tr>";
      $st_chaine .= sprintf("<tr><th>Email perso (requis si connu)</th><td><input type=\"text\" maxlength=60 size=40 name=email_perso id=email_perso value=\"%s\"></td></tr>",$this->st_email_perso);     
      $st_chaine .= sprintf("<tr><th>T&eacute;l&eacute;phone</th><td><input type=\"text\" maxlength=15 size=20 name=tel value=\"%s\"></td></tr>",$this->st_tel);
      $st_chaine .='</table>';
      return $st_chaine;
   }
     
   /*
   * Affiche les options d'aide possible
   */
   public function formulaire_aides_possibles() 
   {
      $st_chaine ="<div><br>Je souhaite m�impliquer dans le fonctionnement de l�association en:<br></div><div align=left>";
      $st_coche = ($this->i_aide & AIDE_RELEVES) ? 'checked' : '';
      $st_chaine .= "<input type=checkbox name=\"aide[]\" value=".AIDE_RELEVES." $st_coche> Effectuant des relev&eacute;s<br>\n";
      $st_coche = ($this->i_aide & AIDE_INFORMATIQUE) ? 'checked' : '';
      $st_chaine .= "<input type=checkbox name=\"aide[]\" value=".AIDE_INFORMATIQUE." $st_coche> Participant &agrave; l�informatique<br>\n";
      $st_coche = ($this->i_aide & AIDE_AD) ? 'checked' : '';
      $st_chaine .= "<input type=checkbox name=\"aide[]\" value=".AIDE_AD." $st_coche> Faisant de l�entraide aux AD<br>\n";
      $st_coche = ($this->i_aide & AIDE_BULLETIN) ? 'checked' : '';
      $st_chaine .="<input type=checkbox name=\"aide[]\" value=".AIDE_BULLETIN." $st_coche> Participant au Bulletin<br>\n";
      $st_chaine .= "<div>Merci de cocher la case correspondante:<br>\n</div>";
      $st_chaine .="</div>";
      return $st_chaine;
   }
   
   /*
   *  Affiche le formulaire des origines possibles de l'adh�rent
   */
   public function formulaire_origine()
   {
      $st_chaine = "<div>Comment nous avez-vous connu ?<br>";
      $st_coche  = ($this->i_origine==ORIGINE_INTERNET) ? 'checked' : '';
      $st_chaine .= "<div><input type=\"radio\" id=\"OrigineInternet\" name=\"type_origine\" value=\"".ORIGINE_INTERNET."\" $st_coche>";
      $st_chaine .= "<label for=\"OrigineInternet\">Site Internet</label><br>\n";
      $st_coche  = ($this->i_origine==ORIGINE_FORUM) ? 'checked' : '';
      $st_chaine .= "<input type=\"radio\" id=\"OrigineForum\" name=\"type_origine\" value=\"".ORIGINE_FORUM."\" $st_coche>";
      $st_chaine .= "<label for=\"OrigineForum\">Forum de discussion</label><br>\n";
      $st_coche  = ($this->i_origine==ORIGINE_PRESSE) ? 'checked' : '';
      $st_chaine .= "<input type=\"radio\" id=\"OriginePresse\" name=\"type_origine\" value=\"".ORIGINE_PRESSE."\" $st_coche>";
      $st_chaine .= "<label for=\"OriginePresse\">Article de presse</label><br>\n";
      $st_coche  = ($this->i_origine==ORIGINE_MANIFESTATION) ? 'checked' : '';
      $st_chaine .= "<input type=\"radio\" id=\"OrigineManifestation\" name=\"type_origine\" value=\"".ORIGINE_MANIFESTATION."\" $st_coche>";
      $st_chaine .= "<label for=\"OrigineManifestation\">Manifestation sp�cifique</label><br>\n";
      $st_coche  = ($this->i_origine==ORIGINE_AD) ? 'checked' : '';
      $st_chaine .= "<input type=\"radio\" id=\"OrigineAD\" name=\"type_origine\" value=\"".ORIGINE_AD."\" $st_coche>";
      $st_chaine .= "<label for=\"OrigineAD\">Visite aux AD</label><br>\n";
      $st_coche  = ($this->i_origine==ORIGINE_CONNAISSANCE) ? 'checked' : '';
      $st_chaine .= "<input type=\"radio\" id=\"OrigineConnaissance\" name=\"type_origine\" value=\"".ORIGINE_CONNAISSANCE."\" $st_coche>";
      $st_chaine .= "<label for=\"OrigineConnaissance\">Bouche &agrave; oreille</label><br>\n";
      $st_coche  = ($this->i_origine==ORIGINE_AUTRE) ? 'checked' : '';
      $st_chaine .= "<input type=\"radio\" id=\"OrigineAutre\" name=\"type_origine\" value=\"".ORIGINE_AUTRE."\" $st_coche>";
      $st_chaine .= "<label for=\"OrigineConnaissance\">Autre</label><br>\n</div>";
      $st_chaine .= sprintf("Veuillez pr&eacute;ciser SVP dans tous les cas: <input type=\"text\" maxlength=80 size=20 name=\"description_origine\" id=description_origine value=\"%s\"><br></div>",$this->st_origine); 
      return $st_chaine;
   } 
   
   /*
   * Affiche le formulaire de gestion AGC
   */
   public function formulaire_infos_agc()
   {
      $st_chaine ='';
      if (a_droits($this->st_ident_modificateur,DROIT_GESTION_ADHERENT))
      {
        $st_chaine = "<div>";
        $st_chaine .= sprintf("Identifiant: <input type=\"text\" maxlength=12 size=8 name=ident_adh id=ident_adh value=\"%s\">",$this->st_ident);
        $this->a_filtres_parametres["ident_adh"] = array(array("required", "true", "L'identifiant est obligatoire"));
        $st_chaine .= "</div>";
        $st_chaine .= "<div>";
        $st_chaine .= sprintf("Infos AGC :<br><textarea name=\"infos_agc\" cols=\"60\" rows=\"10\" id=\"infos_agc\">%s</textarea><br>",$this->st_infos_agc);
        $st_chaine .= "</div>";
        $st_chaine .= "<div>";
        $st_chaine .= sprintf("Date de premi&egrave;re adh&eacute;sion: <input name=\"date_premiere_adhesion\"  id=\"date_premiere_adhesion\" value=\"%s\" size=\"10\" maxlength=\"10\" type=\"text\" style=\"width:70px\"><br>",$this->st_date_premiere_adhesion);     
		    $st_chaine .= sprintf("Date de paiement: <input name=\"date_paiement\" id=\"date_paiement\" value=\"%s\" size=\"10\" maxlength=\"10\" type=\"text\" style=\"width:70px\"> ",$this->st_date_paiement);      
        $st_chaine .= sprintf(" prix: <input name=\"prix\" value=\"%d\" id=\"prix\" size=\"2\" maxlength=\"2\" type=\"text\" style=\"width:25px\">",$this->i_prix);        
        $st_chaine .= sprintf(" ann&eacute;e de cotisation: <input name=\"annee_cotisation\" id=\"annee_cotisation\" value=\"%d\" size=\"4\" maxlength=\"4\" type=\"text\" style=\"width:40px\">",$this->i_annee_cotisation);         
        $st_chaine .= " <input type=button value=R  id=readhesion><br>";    
        $st_chaine .= sprintf("Derni&egrave;re adresse ip de connexion: %s<br>",$this->st_ip_connexion);
        $st_chaine .= sprintf("IP restreinte: <input type=\"text\" maxlength=15 size=15 name=ip_restreinte id=ip_restreinte value=\"%s\"><br>",$this->st_ip_restreinte);
        $st_chaine .= sprintf("Quota Naissance: <input type=\"text\" maxlength=4 size=4 name=\"max_nai\" id=\"max_nai\" value=\"%d\"><br>",$this->i_max_nai);
        
        $st_chaine .= sprintf("Quota Mariage/Divers: <input type=\"text\" maxlength=4 size=4 name=\"max_mar_div\" id=\"max_mar_div\" value=\"%d\"><br>",$this->i_max_mar_div);
          
        $st_chaine .= sprintf("Quota D&eacute;c&eacute;s: <input type=\"text\" maxlength=4 size=4 name=\"max_dec\" id=\"max_dec\" value=\"%d\"><br>",$this->i_max_dec);
        $st_chaine .= sprintf("Dernier jeton de paiement (si adh&eacute;sion en ligne): %s<br>",$this->st_jeton_paiement);
        $st_chaine .= "</div>";
      }
      return $st_chaine;
   }
   
    /*
    * renvoie le formulaire du type d'inscription (Internet ou Bulletin)
    * @param string $pst_pays  pays de l'adh�rent
    * @param string $pst_cp  code postal de l'adh�rent
    * @return string formulaire d'inscription
    */
    function  formulaire_type_inscription($pst_pays,$pst_cp)
    {
      global  $ga_tarifs;
      $st_chaine = "<div>Choisissez votre type d'inscription:<br>";
      $i_tarif = $ga_tarifs['internet'];
      $st_chaine .= "<input type=\"radio\" name=\"statut\" value=\"".ADHESION_INTERNET."\" checked> Uniquement internet: $i_tarif euros";
      if (strtoupper($pst_pays)=='FRANCE' &&  preg_match('/^\d+$/',$pst_cp) && substr($pst_cp,0,2)<96 )
      {
        // Les d�partements m�troppolitains ont un code postal inf�rieur � 96
        // Les DOM s'�tendent de 971 � 976
        // les TOM de 984 � 988
        $i_tarif = $ga_tarifs['bulletin_metro'];
        $st_chaine .= "<br><input type=\"radio\" name=\"statut\" value=\"".ADHESION_BULLETIN."\"> Internet + bulletins : $i_tarif euros (France M&eacute;tropolitaine)<br>";
      }
      else
      {
        $i_tarif = $ga_tarifs['bulletin_etranger'];
        $st_chaine .= "<input type=\"radio\" name=\"statut\" value=\"".ADHESION_BULLETIN."\"> Internet + bulletins: $i_tarif euros (Etranger)<br>";
      }
      $st_chaine .= "<br></div>";
      return  $st_chaine;
    }
   
   /*
   * Affiche le formulaire de gestion des droits de l'adh�rent
   */
   public function formulaire_droits_adherents()
   {
      global $ga_droits;
      $st_chaine ='';
      if (a_droits($this->st_ident_modificateur,DROIT_GESTION_ADHERENT))
      {
        $st_chaine = "<blockquote><div class=\"alignLeft\">Droits:<br>";      
        foreach ($ga_droits as $st_droit => $st_label_droit)
        {
          $st_chaine .= "<div class=\"alignLeft\">";
          if (in_array($st_droit,$this->a_droits_adherents))
            $st_chaine .=sprintf("<label><input type=checkbox name=\"droits[]\" value=\"%s\" checked />%s</label><br>",$st_droit,$st_label_droit);
          else
            $st_chaine .=sprintf("<label><input type=checkbox name=\"droits[]\" value=\"%s\"/>%s</label><br>",$st_droit,$st_label_droit);     
          $st_chaine .= "</div>";
        }      
        $st_chaine .= "</div></blockquote>";
      }  
      return $st_chaine;
   }
   
   /*
   * Change le mot de passe de l'adh�rent uniquement dans la base 
   * @param string $pst_nouveau_mdp nouveau mot de passe
   */
   private function change_mdp_base($pst_nouveau_mdp)
   {
	    $st_mdp_hash = password_hash($pst_nouveau_mdp, PASSWORD_DEFAULT);
      $this->connexionBD->initialise_params(array(':ident'=>$this->st_ident,':mdp'=>$st_mdp_hash));
      $st_requete =  "update adherent set mdp=:mdp where ident=:ident";
      $this->connexionBD->execute_requete($st_requete);
   }
   
   /*
   * Change le mot de passe de l'adh�rent
   * @param string $pst_nouveau_mdp nouveau mot de passe
   */
   public function change_mdp($pst_nouveau_mdp)
   {
      global $gst_administrateur_gbk;
      $this->st_mdp=$pst_nouveau_mdp;
      if (!empty($gst_administrateur_gbk))
      {
        if (!$this->change_mdp_gbk($pst_nouveau_mdp))
          $this->envoie_message_geneabank_erreur_changement_mdp();         
      }
      $this->change_mdp_base($pst_nouveau_mdp);
      return $this->envoie_message_geneabank_changement_mdp();
   }
   
   /*
   * Reactive l'adh�rent (recr�ation du compte gbk et changement de mot de passe)
   */
   public function reactive()
   {
      global $gst_administrateur_gbk;
      if (!empty($gst_administrateur_gbk))
      {
		   $st_mdp = self::mdp_alea();
		   $this->cree_utilisateur_gbk($st_mdp);
	      $this->change_mdp_base($st_mdp);
	      return $this->envoie_message_geneabank_changement_mdp();
	    }
      else
        return true;
   }
   
   /*
   * Modifie l'adh�rent (l'adh�rent � modifier est l'adh�rent connect�)
   */   
   public function modifie_infos_personnelles()
   {
      global $gst_administrateur_gbk;
      $this->connexionBD->initialise_params(array(':ident'=>$this->st_ident,':idf'=>$this->i_idf));
      $i_nbadh_meme_ident= $this->connexionBD->sql_select1("select count(*) from adherent where ident=:ident and idf!=:idf"); 
      if ($i_nbadh_meme_ident==0)
      { 
         
         $st_confidentiel  = $this->b_confidentiel ? 'O': 'N';
         $this->connexionBD->initialise_params(array(':nom'=>$this->st_nom,':prenom'=>$this->st_prenom,':adr1'=>$this->st_adresse1,':adr2'=>$this->st_adresse2,':cp'=>$this->st_code_postal,':ville'=>$this->st_ville,':pays'=>$this->st_pays,':tel'=>$this->st_tel,':email_perso'=>$this->st_email_perso,':email_forum'=>$this->st_email_forum,':site'=>$this->st_site,':confidentiel'=>$st_confidentiel,':ident_adh'=>$this->st_ident,':aide'=>$this->i_aide,':type_origine'=>$this->i_origine,':description_origine'=>$this->st_origine,':ident'=>$this->st_ident_modificateur));
         $st_requete = "update adherent set nom=:nom,prenom=:prenom,adr1=:adr1,adr2=:adr2,cp=:cp,ville=upper(:ville),pays=:pays,tel=:tel,email_perso=:email_perso,email_forum=:email_forum,site=:site,confidentiel=:confidentiel, ident=:ident_adh,aide=:aide,type_origine=:type_origine,description_origine=:description_origine where ident=:ident";
         $this->connexionBD->execute_requete($st_requete); 
         if ($this->st_ident!=$this->st_ident_modificateur)
         {
            // Changement d'identifiant => une nouvelle identification est obligatoire
            unset($_SESSION['ident']);            
         }
         
      }
      else
      {
        throw new Exception("Cet identifiant est d&eacute;j&agrave; utilis&eacute;. Les informations N'ONT PAS &eacute;t&eacute; mises &agrave; jour");
      }
   }
   
   /*
   * Modifie l'adh�rent (l'adh�rent connect� est un gestionnaire de base)
   */
   public function modifie_avec_droits()
   {
      $this->connexionBD->initialise_params(array(':ident'=>$this->st_ident,':idf'=>$this->i_idf));
      $i_nbadh_meme_ident= $this->connexionBD->sql_select1("select count(*) from adherent where ident=:ident and idf!=:idf"); 
      if ($i_nbadh_meme_ident==0)
      { 
         $this->connexionBD->initialise_params(array(':ident'=>$this->st_ident_modificateur));
         $i_idf_adht_connecte= $this->connexionBD->sql_select1("select idf from adherent where ident=:ident");
         $st_confidentiel  = $this->b_confidentiel ? 'O': 'N';
         if ($this->i_idf==$i_idf_adht_connecte)
         {  
            // L'utilisateur connect� modifie son propre compte 	 
            $this->connexionBD->initialise_params(array(':nom'=>$this->st_nom,':prenom'=>$this->st_prenom,':adr1'=>$this->st_adresse1,':adr2'=>$this->st_adresse2,':cp'=>$this->st_code_postal,':ville'=>$this->st_ville,':pays'=>$this->st_pays,':tel'=>$this->st_tel,':email_perso'=>$this->st_email_perso,':email_forum'=>$this->st_email_forum,':site'=>$this->st_site,':statut'=>$this->st_statut,':confidentiel'=>$st_confidentiel,':ident_adh'=>$this->st_ident,':aide'=>$this->i_aide,':type_origine'=>$this->i_origine,':description_origine'=>$this->st_origine,':ident'=>$this->st_ident_modificateur));
            $this->connexionBD->execute_requete("update adherent set nom=:nom,prenom=:prenom,adr1=:adr1,adr2=:adr2,cp=:cp,ville=upper(:ville),pays=:pays,tel=:tel,email_perso=:email_perso,email_forum=:email_forum,site=:site,statut=:statut,confidentiel=:confidentiel, ident=:ident_adh,aide=:aide,type_origine=:type_origine,description_origine=:description_origine where ident=:ident"); 
         }
         else if (a_droits($this->st_ident_modificateur,DROIT_GESTION_ADHERENT))
         {
			     // l'utilisateur connect� est un administrateur
			     $this->modifie();            
         }            
        if ($this->i_idf==$i_idf_adht_connecte && $this->st_ident!=$this->st_ident_modificateur)
        {
          // Changement d'identifiant => une nouvelle identification est obligatoire
          unset($_SESSION['ident']);
        }
        if (a_droits($this->st_ident_modificateur,DROIT_GESTION_ADHERENT))
        {
           $this->modifie_adhesion(); 
        }
        if (a_droits($this->st_ident_modificateur,DROIT_MODIFICATION_DROITS))
        {
          $this->connexionBD->initialise_params(array(':idf'=>$this->i_idf));
          $this->connexionBD->execute_requete("delete privilege from privilege join adherent on (idf_adherent=idf) where idf=:idf");
          $i_idf_adherent=$this->connexionBD->dernier_idf_insere();
          $a_droits = isset($_POST['droits']) ? $_POST['droits'] : array();
          foreach ($a_droits as $c_droit)
          {
            $this->connexionBD->initialise_params(array(':idf'=>$this->i_idf,':droit'=>$c_droit));
            $this->connexionBD->execute_requete("insert into privilege(idf_adherent,droit) values(:idf,:droit)");
          }
        }  
      }
      else
      {
        throw new Exception("Cet identifiant est d&eacute;j&agrave; utilis&eacute;. Les informations N'ONT PAS &eacute;t&eacute; mises &agrave; jour");
      }
   }
   
   /*
   * Cr�e un adh�rent
   */
   public function cree() 
   {
      if (!$this->cree_utilisateur_gbk($this->st_mdp))
          $this->envoie_message_geneabank();
      $st_confidentiel = $this->b_confidentiel ? 'O' :' N';
      $st_mdp_hash = password_hash($this->st_mdp, PASSWORD_DEFAULT);
      $this->connexionBD->initialise_params(array(':nom'=>$this->st_nom,':prenom'=>$this->st_prenom,':adr1'=>$this->st_adresse1,':adr2'=>$this->st_adresse2,':cp'=>$this->st_code_postal,':ville'=>$this->st_ville,':pays'=>$this->st_pays,':tel'=>$this->st_tel,':email_perso'=>$this->st_email_perso,':email_forum'=>$this->st_email_forum,':site'=>$this->st_site,':statut'=>$this->st_statut,':confidentiel'=>$st_confidentiel,':ident_adh'=>$this->st_ident,':mdp'=>$st_mdp_hash,':aide'=>$this->i_aide,':type_origine'=>$this->i_origine,':description_origine'=>$this->st_origine,':infos_agc'=>$this->st_infos_agc,':date_premiere_adhesion'=>$this->st_date_premiere_adhesion,':date_paiement'=>$this->st_date_paiement,':prix'=>$this->i_prix,':annee_cotisation'=>$this->i_annee_cotisation,':jeton_paiement'=>$this->st_jeton_paiement,':ip_restreinte'=>$this->st_ip_restreinte));
      $st_requete = "insert into adherent(nom,prenom,adr1,adr2,cp,ville,pays,tel,email_perso,email_forum,site,statut,confidentiel,ident,mdp,aide,type_origine,description_origine,infos_agc,date_premiere_adhesion,date_paiement,prix,annee_cotisation,jeton_paiement,ip_restreinte) values(:nom,:prenom,:adr1,:adr2,:cp,upper(:ville),:pays,:tel,:email_perso,:email_forum,:site,:statut,:confidentiel,:ident_adh,:mdp,:aide,:type_origine,:description_origine,:infos_agc,str_to_date(:date_premiere_adhesion,'%d/%m/%Y'),str_to_date(:date_paiement,'%d/%m/%Y'),:prix,:annee_cotisation,:jeton_paiement,:ip_restreinte)";
      $this->connexionBD->execute_requete($st_requete);
      $i_idf_adherent=$this->connexionBD->sql_select1("select max(idf) from adherent");
      if (empty($this->st_ident))
      {
        $this->connexionBD->initialise_params(array(':ident_adht'=>$i_idf_adherent,':idf'=>$i_idf_adherent));
        $connexionBD->execute_requete("update adherent set ident=:ident_adht where idf=:idf");
      }
      
		  if ($this->envoie_message_adherent())
			  print("<div> Message envoy&eacute; &agrave; l'adh&eacute;rent</div>");
		  else
			  print("<div class=ERREUR> Echec lors de l'envoi du  message &agrave; l'adh&eacute;rent</div>");
		  if ($this->envoie_message_direction())
			   print("<div> Message envoy&eacute; &agrave; la direction de l'association</div>");
		  else
			 print("<div class=ERREUR> Echec lors de l'envoi du  message &agrave; la direction de l'association</div>");
   }
   
   /*
   * Modifie un adh�rent
   */
   public function modifie()
   {
     $this->connexionBD->initialise_params(array(':nom'=>$this->st_nom,':prenom'=>$this->st_prenom,':adr1'=>$this->st_adresse1,':adr2'=>$this->st_adresse2,':cp'=>$this->st_code_postal,':ville'=>$this->st_ville,':pays'=>$this->st_pays,':tel'=>$this->st_tel,':email_perso'=>$this->st_email_perso,':email_forum'=>$this->st_email_forum,':site'=>$this->st_site,':statut'=>$this->st_statut,':confidentiel'=>$this->b_confidentiel,':ident_adh'=>$this->st_ident,':aide'=>$this->i_aide,':type_origine'=>$this->i_origine,':description_origine'=>$this->st_origine,':ident'=>$this->st_ident));
      $this->connexionBD->execute_requete("update adherent set nom=:nom,prenom=:prenom,adr1=:adr1,adr2=:adr2,cp=:cp,ville=upper(:ville),pays=:pays,tel=:tel,email_perso=:email_perso,email_forum=:email_forum,site=:site,statut=:statut,confidentiel=:confidentiel, ident=:ident_adh,aide=:aide,type_origine=:type_origine,description_origine=:description_origine where ident=:ident");
   }
   
   public function modifie_adhesion()
   {
     $this->connexionBD->initialise_params(array(':statut'=>$this->st_statut,':infos_agc'=>$this->st_infos_agc,':date_premiere_adhesion'=>$this->st_date_premiere_adhesion,':date_paiement'=>$this->st_date_paiement,':prix'=>$this->i_prix,':annee_cotisation'=>$this->i_annee_cotisation,':jeton_paiement'=>$this->st_jeton_paiement,':ip_restreinte'=>$this->st_ip_restreinte,':max_nai'=>$this->i_max_nai,':max_mar_div'=>$this->i_max_mar_div,':max_dec'=>$this->i_max_dec,':idf'=>$this->i_idf));
     $this->connexionBD->execute_requete("update adherent set statut=:statut,infos_agc=:infos_agc,date_premiere_adhesion=str_to_date(:date_premiere_adhesion,'%d/%m/%Y'),date_paiement=str_to_date(:date_paiement,'%d/%m/%Y'),prix=:prix,annee_cotisation=:annee_cotisation,jeton_paiement=:jeton_paiement,ip_restreinte=:ip_restreinte,max_nai=:max_nai, max_mar_div=:max_mar_div,max_dec=:max_dec where idf=:idf");
   }	   
   
   /*
   * Cr�e l'adh�rent dans la base
   */   
   public function cree_avec_droits()
   {
      global $a_droits;
      if (a_droits($this->st_ident_modificateur,DROIT_MODIFICATION_DROITS))
      {
        
        $a_droits = isset($_POST['droits']) ? $_POST['droits'] : array();
        foreach ($a_droits as $c_droit)
        {
          $this->connexionBD->initialise_params(array(':idf'=>$this->i_idf,':droit'=>$c_droit));
          $this->connexionBD->execute_requete("insert into privilege(idf_adherent,droit) values(:idf,:droit)");
        }
      }
	  if (a_droits($this->st_ident_modificateur,DROIT_GESTION_ADHERENT))
      {
        $this->cree();      
      }
   }
   
   /* 
   * Supprime l'adh�rent en cours (g�n�abank + basev4)
   */
   public function supprime()
   {     
      if (!$this->supprime_utilisateur_gbk())
        print self::$st_erreur_gbk; 
      $this->connexionBD->initialise_params(array(':idf'=>$this->i_idf));
      $this->connexionBD->execute_requete("delete from demandes_adherent where idf_adherent=:idf");
      $this->connexionBD->initialise_params(array(':idf'=>$this->i_idf));
      $this->connexionBD->execute_requete("delete from adherent where idf=:idf");
      $st_requete = "select max(idf) from adherent";        
      $i_max_adherent = $this->connexionBD->sql_select1($st_requete);
      if ($this->i_idf>=$i_max_adherent)
        $this->connexionBD->execute_requete(sprintf("alter table adherent AUTO_INCREMENT=%d",$i_max_adherent++));
      else
        print self::$st_erreur_gbk;               
   }
      
   /*
    * Construit la chaine permettant la validation des param�tres d'un formulaire
    * @return string r�gles de validation
    */
  public function regles_validation()
  {
    $a_messages ='';
    $st_chaine='';
    foreach ($this->a_filtres_parametres as $st_param => $a_liste_tests)
    {
		  $st_test =	"\t$st_param: { ";
		  $st_message= "\t$st_param: { ";
		  $a_tests=array();
		  $a_msgs=array();
		  foreach($a_liste_tests as $a_test)
		  {
			   list($st_type_test,$st_valeur_test,$st_message_erreur,$st_code) = $a_test;
			   $a_tests[] = "\t\t$st_type_test: $st_valeur_test";
			   $a_msgs[] = empty($st_code) ? "\t\t$st_type_test: \"$st_message_erreur\"" : "\t\t$st_type_test: \"$st_message_erreur\"+$st_code" ;
		  }
		  $st_test .= implode(",\n",$a_tests);
		  $st_test .= "\n\t}";
		  $st_message .= implode(",\n",$a_msgs);
		  $st_message .= "\n\t}";
		  $a_regles[]=$st_test;
		  $a_messages[]=$st_message;
    }
	  $st_chaine=	"rules: {\n".implode(",\n",$a_regles)."},\n";
	  $st_chaine.= "messages: {\n".implode(",\n",$a_messages)."}\n";
    return  $st_chaine;
  }
  
  /*
  * Renvoie un mot de passe construit al�atoirement
  * @return string mot de passe 
  */
  public static function mdp_alea()
  {
    $st_mdp = "";
    for ($ix=1; $ix < 5; $ix++) {$st_mdp .= chr(rand(65,90));}
    for ($ix=1; $ix < 5; $ix++) {$st_mdp .= chr(rand(48,57));}
    return $st_mdp;
  }
  
  /** Envoie une message d'inscription � l'adh�rent
 * @global string $gst_url_site Adresse du site    
 */ 
  function envoie_message_adherent() {
    global $gst_url_site;
    $st_message_html  = sprintf("Bonjour <font><strong>%s %s</strong></font>\n\n",$this->st_prenom,$this->st_nom);
    $st_message_html .= "Vous venez d'&ecirc;tre inscrit(e) sur le site de l'A.G.C et &agrave; G&eacute;n&eacute;abank.\n";
    $st_message_html .= sprintf("Votre inscription est valid&eacute;e pour l'ann&eacute;e %d\n",$this->i_annee_cotisation);
    $st_message_html .= "A partir de maintenant, vous pouvez avoir acc&eacute;s &agrave; l'espace membres de notre groupe.\n";
    $st_message_html .= "Afin de mettre &agrave; jour vos informations, il vous suffit, pour cela, de vous rendre &agrave; l'adresse suivante :\n";
    $st_message_html .= "<a href=\"$gst_url_site\">$gst_url_site</a>\n\n";
    $st_message_html .= "Pour vous connecter &agrave; la base AGC\n";
    $st_message_html .= sprintf("Votre identifiant est votre num&eacute;ro de membre : <font color=\"#FF0000\"><strong>%s</strong></font>\n",$this->i_idf);
    $st_message_html .= sprintf("Votre mot de passe est : <font color=\"#FF0000\"><strong>%s</strong></font>\n\n",$this->st_mdp);
    $st_message_html .= "Pour vous connecter &agrave; G&eacute;n&eacute;aBank\n";
    $st_message_html .= sprintf("Votre nom d'utilisateur : <font color=\"#FF0000\"><strong>".PREFIXE_ADH_GBK."%s</strong></font>\n",$this->i_idf);
    $st_message_html .= sprintf("Votre mot de passe est : <font color=\"#FF0000\"><strong>%s</strong></font>\n\n",$this->st_mdp);
    $st_message_html .= "Nous vous demandons de bien noter ces informations que vous pouvez g&eacute;rer &agrave; votre gr&eacute;\n\n";
    $st_message_html .= "Ces informations sont strictement personnelles et confidentielles.\n";
    $st_message_html .= "La divulgation de ces codes &agrave; un non adh&eacute;rent entrainera la suspension du compte.\n\n";  
    $st_message_html .= "N'oubliez pas de vous inscrire sur le forum de l'AGC pour &eacute;changer avec les autres adh&eacute;rents en envoyant un mail vide &agrave; ".EMAIL_INSCRIPTION_FORUM.".\n\n";
    $st_message_html .= "Nous vous souhaitons de fructueuses recherches et d'agr&eacute;ables &eacute;changes avec nos adh&eacute;rents.\n\n";
    $st_message_html .= "Les gestionnaires du site\n";
    $st_message_html = nl2br($st_message_html);
    $st_message_texte = strip_tags(html_entity_decode($st_message_html)); 
  
    $st_frontiere = '-----=' . md5(uniqid(mt_rand())); 
  
    $st_entete  = "From: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n>";
    $st_entete .= "Reply-to: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n";
    $st_entete .= "Cc: ".EMAIL_DIRASSO."\n";
    $st_entete .= "Bcc: fbouffanet@yahoo.fr,agc-info@genea16.net\n";
    $st_entete .= "Reply-to: AGC <".EMAIL_DIRASSO.">\n";
    $st_entete .= "Disposition-Notification-To: AGC<".EMAIL_DIRASSO.">\n";
	  $st_entete .= 'MIME-Version: 1.0' . "\n"; 
    $st_entete .= 'Content-Type: multipart/alternative; boundary="'.$st_frontiere.'"';
    $st_message = 'Votre messagerie doit etre compatible MIME.'."\n\n"; 
    $st_message .= '--'.$st_frontiere."\n";
    $st_message .= 'Content-Type: text/plain; charset="cp1252"'."\n";
    $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $st_message .= $st_message_texte."\n\n";
    $st_message .= '--'.$st_frontiere."\n";
    $st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
    $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $st_message .= $st_message_html."\n\n";
    $st_message .= '--'.$st_frontiere."--\n";
    $st_sujet = "Inscription a l'A.G.C. - Association Genealogique de la Charente";
    return (mail($this->st_email_perso,$st_sujet,$st_message, $st_entete));
  }
  
  /** Envoie un message de readhesion 
 * @global string $gst_url_site Adresse du site
 * @return boolean Le message a ete envoye ou pas  
 */
  function envoie_message_readhesion() {
    global $gst_url_site;
    $st_message_html  = sprintf("Bonjour <font><strong>%s %s</strong></font>\n\n",$this->st_prenom,$this->st_nom);
    $st_message_html .= sprintf("Nous accusons r&eacute;ception de votre paiement, votre inscription est valid&eacute;e pour l'ann&eacute;e %d\n",$this->i_annee_cotisation);
    $st_message_html .= "Afin de mettre &agrave; jour vos informations, il vous suffit, pour cela, de vous rendre &agrave; l'adresse suivante:\n";
    $st_message_html .= "<a href=\"$gst_url_site\">$gst_url_site</a>\n\n";
    $st_message_html .= "Nous vous rappelons que les codes d'acc&egrave;s &agrave; la base sont strictement personnels et confidentiels\n";
    $st_message_html .= "La divulgation de ces codes &agrave; un non adh&eacute;rent entrainera la suspension du compte\n\n";
    $st_message_html .= "Nous vous souhaitons de fructueuses recherches et d'agr&eacute;ables &eacute;changes avec nos adh&eacute;rents\n\n";
    $st_message_html .= "Les gestionnaires du site\n";
  
    $st_message_html = nl2br($st_message_html);
    $st_message_texte = strip_tags(html_entity_decode($st_message_html)); 
  
    $st_frontiere = '-----=' . md5(uniqid(mt_rand())); 
  
    $st_entete  = "From: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n>";
    $st_entete .= "Reply-to: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n";
    $st_entete .= "Cc: ".EMAIL_DIRASSO."\n";
    $st_entete .= "Bcc: fbouffanet@yahoo.fr\n";
    $st_entete .= "Reply-to: AGC <".EMAIL_DIRASSO.">\n";
    $st_entete .= "Disposition-Notification-To: AGC<".EMAIL_DIRASSO.">\n";
    $st_entete .= 'MIME-Version: 1.0' . "\n"; 
    $st_entete .= 'Content-Type: multipart/alternative; boundary="'.$st_frontiere.'"';
    
    $st_sujet = "Re-inscription a l'A.G.C. - Association Genealogique de la Charente";

    $st_message = 'Votre messagerie doit etre compatible MIME.'."\n\n";
    $st_message .= '--'.$st_frontiere."\n";
    $st_message .= 'Content-Type: text/plain; charset="cp1252"'."\n";
    $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $st_message .= $st_message_texte."\n\n";
    $st_message .= '--'.$st_frontiere."\n";
    $st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
    $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $st_message .= $st_message_html."\n\n";
    $st_message .= '--'.$st_frontiere."--\n";
    return (mail($this->st_email_perso,$st_sujet,$st_message, $st_entete));
  }
  
  /** Envoie un message d'inscription g�n�abank � l'admin geneabank
 * @return boolean Le message a �t� envoy� ou pas  
 */ 
  function envoie_message_geneabank() {
    $st_message_html = "<font color=\"red\">";
    $st_message_html .= self::$st_erreur_gbk;
    $st_message_html .= "</font>";
    $st_message_html  .= sprintf("Inscription G&eacute;n&eacute;aBank de <font><strong>%s %s</strong></font>\n\n",$this->st_prenom,$this->st_nom);
    $st_message_html .= "Faire un copier de la ligne ci dessous et la coller dans l'interface de gestion de G&eacute;n&eacute;abank.\n\n";
    $st_message_html .= sprintf("register AGC%d %s %s %s %s\n",$this->i_idf,$this->st_mdp,$this->st_email_perso,$this->st_nom,$this->st_prenom);
    $st_message_html .= "set ".PREFIXE_ADH_GBK.$this->i_idf." ".NB_POINTS_GBK."  Inscription\n";
    $st_message_html = nl2br($st_message_html);
    $st_message_texte = strip_tags(html_entity_decode($st_message_html)); 
  
    $st_sujet = "Erreur lors de l'inscription pour GeneaBank";
  
    $st_frontiere = '-----=' . md5(uniqid(mt_rand())); 
  
    $st_entete  = "From: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n>";
    $st_entete .= "Reply-to: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n";
    $st_entete .= "Cc: ".EMAIL_DIRASSO."\n";
    $st_entete .= "Bcc: fbouffanet@yahoo.fr\n";
    $st_entete .= "Reply-to: AGC <".EMAIL_DIRASSO.">\n";
    $st_entete .= 'MIME-Version: 1.0' . "\n"; 
    $st_entete .= 'Content-Type: multipart/alternative; boundary="'.$st_frontiere.'"';
    $st_message = 'Votre messagerie doit etre compatible MIME.'."\n\n"; 
    $st_message .= '--'.$st_frontiere."\n";
    $st_message .= 'Content-Type: text/plain; charset="cp1252"'."\n";
    $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $st_message .= $st_message_texte."\n\n";
    $st_message .= '--'.$st_frontiere."\n";
    $st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
    $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $st_message .= $st_message_html."\n\n";
    $st_message .= '--'.$st_frontiere."--\n";
    return (mail(EMAIL_GBKADMIN,$st_sujet, $st_message , $st_entete));
  }
  
  /** Envoie un message de changement de mot de passe g�n�abank � l'admin geneabank
  * @param string $pi_num_adh Identifiant de connexion de l'adh�rent
  * @param string $pst_mdp Mot de passe de l'adh�rent
  * @param string $pst_prenom Pr�nom de l'adh�rent
   * @param string $pst_nom Nom de l'adh�rent
  * @return boolean Le message a �t� envoy� ou pas  
  */ 
  function envoie_message_geneabank_erreur_changement_mdp() {
    $st_texte  = sprintf("Erreur lors du changement de mot de passe G�n�aBank de <font><strong>%s %s</strong></font>\n\n",$this->st_prenom,$this->st_nom);
    $st_texte .= "<font color=\"red\">";
    $st_texte .= self::$st_erreur_gbk;
    $st_texte .= "</font>";
    $st_texte .= "Faire un copier de la ligne ci dessous et la coller dans l'interface de gestion de G�n�abank.\n\n";
    $st_texte .= sprintf("register AGC%d %s %s %s %s\n",$this->i_idf,$this->st_mdp,$this->st_email_perso,$this->st_nom,$this->st_prenom);
    $st_texte .= "set ".PREFIXE_ADH_GBK.$this->i_idf." ".NB_POINTS_GBK."  Inscription\n";
    $st_sujet = "Changement de mot de passe GeneaBank";
    $st_entete  = 'MIME-Version: 1.0' . "\r\n";    
    $st_entete .= "Content-type: text/html; charset=cp1252 \r\n";
    $st_entete .= "From: ".EMAIL_DIRASSO."\r\n";
    $st_entete .= "Cc: fbouffanet@yahoo.fr\r\n";
    $st_entete .= "Cc: ".EMAIL_DIRASSO."\r\n";
    $st_entete .= "Reply-to: ".EMAIL_DIRASSO."\r\n";
    return (mail(EMAIL_GBKADMIN,$st_sujet, nl2br(stripslashes($st_texte)), $st_entete));
  }
  
  /** Envoie un message de changement de mot de passe g�n�abank � l'admin geneabank
  * @param string $pi_num_adh Identifiant de connexion de l'adh�rent
  * @param string $pst_mdp Mot de passe de l'adh�rent
  * @param string $pst_prenom Pr�nom de l'adh�rent
   * @param string $pst_nom Nom de l'adh�rent
  * @return boolean Le message a �t� envoy� ou pas  
  */ 
  function envoie_message_geneabank_changement_mdp() {
    $st_texte = sprintf("Bonjour <strong>%s %s</strong>\n\n",$this->st_prenom,$this->st_nom);
    $st_texte .= "Voici votre identifiant et mot de passe d'acc&egrave;s &agrave; la base AGC <strong>GENEA16</strong> et &agrave; G&eacute;n&eacute;aBank\n\n";
    $st_texte .= "N'oubliez pas! votre adresse e-mail doit-&ecirc;tre la m&ecirc;me sur la base GENEA16 et sur Yahoo\n\n";
    $st_texte .="<table border=1>";
    $st_texte .= sprintf("<tr><td>Votre mot de passe:</td><th>%s</th></tr>",$this->st_mdp);
    $st_texte .= sprintf("<tr><td>Votre identifiant AGC:</td><th>%s</th></tr>",$this->st_ident);
    $st_texte .= sprintf("<tr><td>Votre identifiant G&eacute;n&eacute;aBank:</td><th>".PREFIXE_ADH_GBK."%d</th></tr>",$this->i_idf);
    $st_texte .="</table>\n";
    $st_texte .= "Cordialement,\n\nLes responsables du site";
    $st_sujet = "Votre nouveau mot de passe du site AGC";
    $st_entete  = 'MIME-Version: 1.0' . "\r\n";    
    $st_entete .= "Content-type: text/html; charset=cp1252 \r\n";
    $st_entete .= "From: ".EMAIL_DIRASSO."\r\n";
    return (mail($this->st_email_perso,$st_sujet, nl2br(stripslashes($st_texte)), $st_entete));

  }
  
  /** Envoie un message d'inscription g�n�abank � l'admin geneabank 
  * @return boolean Le message a �t� envoy� ou pas  
  */
  function envoie_message_direction() {
    $st_message_html  = sprintf("L'adh&eacute;rent <font><strong>%s %s</strong></font>\n\n",$this->st_prenom,$this->st_nom);
    $st_message_html .= "vient d'&ecirc;tre inscrit(e)\n\n";
    $st_message_html .= sprintf("Num&eacute;ro : %d\n",$this->i_idf);
    $st_message_html .= sprintf(" son MdP : %s\n",$this->st_mdp);
    $st_message_html .= sprintf(" son Email : %s\n",$this->st_email_perso);

    $st_message_html = nl2br($st_message_html);
    $st_message_texte = strip_tags(html_entity_decode($st_message_html)); 
    $st_sujet = "Nouvelle inscription AGC";
  
    $st_frontiere = '-----=' . md5(uniqid(mt_rand())); 
  
    $st_entete  = "From: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n>";
    $st_entete .= "Reply-to: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n";
    $st_entete .= "Bcc: fbouffanet@yahoo.fr\n";
    $st_entete .= "Reply-to: AGC <".EMAIL_DIRASSO.">\n";
    $st_entete .= 'MIME-Version: 1.0' . "\n"; 
    $st_entete .= 'Content-Type: multipart/alternative; boundary="'.$st_frontiere.'"';
    $st_message = 'Votre messagerie doit etre compatible MIME.'."\n\n";
    $st_message .= '--'.$st_frontiere."\n";
    $st_message .= 'Content-Type: text/plain; charset="cp1252"'."\n";
    $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $st_message .= $st_message_texte."\n\n";
    $st_message .= '--'.$st_frontiere."\n";
    $st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
    $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $st_message .= $st_message_html."\n\n";
    $st_message .= '--'.$st_frontiere."--\n";
    return (mail(EMAIL_PRESASSO,$st_sujet, $st_message, $st_entete));
  }
  
  /*
  * Initialise l'adh�rent avec les donn�es venant de l'inscription en ligne
  * @param string $pst_token token identifiant une inscription provisoire
  */
  public function initialise_inscription_en_ligne($pst_token)
  {
    $this->connexionBD->initialise_params(array(':jeton'=>$pst_token));
    list($st_nom,$st_prenom,$st_adr1,$st_adr2,$st_code_postal,$st_ville,$st_pays,$st_tel,$st_email_perso,$st_site,$st_confidentiel,$st_statut,$i_prix,$i_aide,$i_origine,$st_origine,$st_jeton_paiement)=$this -> connexionBD->sql_select_liste("select ins_nom,ins_prenom,ins_adr1,ins_adr2,ins_cp, ins_commune,ins_pays,ins_telephone,ins_email_perso,ins_site_web,ins_cache,ins_statut,ins_prix,ins_aide,ins_type_origine,ins_description_origine,ins_token from `inscription_prov` where ins_token=:jeton");	
    $this->st_statut=$st_statut;
    $this->st_nom=$st_nom;
    $this->st_prenom=$st_prenom;
    $this->st_adresse1=$st_adr1;
    $this->st_adresse2=$st_adr2;
    $this->st_code_postal=$st_code_postal;
    $this->st_ville=$st_ville;
    $this->st_pays=$st_pays;
    $this->st_tel=$st_tel;
    $this->st_email_perso=$st_email_perso;
    $this->st_email_forum=$st_email_perso;
    $this->st_site=$st_site;
    $this->b_confidentiel=$st_confidentiel=='O'? true: false;;
    $this->i_aide=$i_aide;
    $this->i_origine=(int) $i_origine;
    $this->st_origine=$st_origine;
    $this->i_prix=$i_prix;
    $this->st_jeton_paiement=$pst_token;
    $this->st_infos_agc='Inscription en ligne '.$this->st_date_premiere_adhesion."\n";	    
  }
 
  /*
  * Initialise l'adh�rent avec les donn�es venant de la readhesion en ligne
  * @param string $pst_token token identifiant une inscription provisoire
  */
  public function initialise_readhesion_en_ligne($pst_token)
  {
    global $gst_time_zone;
    date_default_timezone_set($gst_time_zone);
    $this->connexionBD->initialise_params(array(':jeton'=>$pst_token));
    list($st_type_inscription,$st_nom,$st_prenom,$st_adr1,$st_adr2,$st_code_postal,$st_ville,$st_pays,$st_tel,$st_email_perso,$st_site,$st_confidentiel,$st_statut,$i_prix,$i_aide,$i_origine,$st_origine,$st_jeton_paiement)=$this -> connexionBD->sql_select_liste("select ins_type,ins_nom,ins_prenom,ins_adr1,ins_adr2,ins_cp, ins_commune,ins_pays,ins_telephone,ins_email_perso,ins_site_web,ins_cache,ins_statut,ins_prix,ins_aide,ins_type_origine,ins_description_origine,ins_token from `inscription_prov` where ins_token=:jeton");
    if ($st_type_inscription=='I')
    {
       // une nouvelle inscription remplace les donn�es de l'ancienne adh�sion
       // il s'agit en g�n�ral des anciens adh�rents qui n'ont pas r�-adh�r� � temps
      $this->st_nom=$st_nom;
      $this->st_prenom=$st_prenom;
      $this->st_adresse1=$st_adr1;
      $this->st_adresse2=$st_adr2;
      $this->st_code_postal=$st_code_postal;
      $this->st_ville=$st_ville;
      $this->st_pays=$st_pays;
      $this->st_tel=$st_tel;
      $this->st_email_perso=$st_email_perso;
      $this->st_site=$st_site;
      $this->b_confidentiel=$st_confidentiel=='O'? true: false;;
      
    }
    $this->st_statut=$st_statut;
    $this->i_prix=$i_prix;
    $this->i_aide=$i_aide;
    $this->i_origine=(int) $i_origine;
    $this->st_origine=$st_origine;    
    $this->st_date_paiement= date("d/m/Y");
    $aujourdhui = getdate();
    $this->i_annee_cotisation = ($aujourdhui['mon']>9) ? $aujourdhui['year'] +1 : $aujourdhui['year'];
	 $this->st_infos_agc.="\nRe-adhesion en ligne ".$this->st_date_paiement;
    $this->st_jeton_paiement=$pst_token;
  }
  
  /*
   * G�n�re une demande de nouveau mot de passe
   * @global $gst_url_site Adresse du site
   */
   public function demande_nouveau_mdp()
   {
      global $gst_url_site;
      switch ($this->st_statut)
      {
        case ADHESION_INTERNET:
        case ADHESION_BULLETIN:
        case ADHESION_HONNEUR:
          $i_clef= rand(10000,65535);
          $this->connexionBD->initialise_params(array(':clef'=>$i_clef,':idf'=>$this->i_idf));
          $st_requete = "update adherent set clef_nouveau_mdp=:clef where idf=:idf";
          $this->connexionBD->execute_requete($st_requete);
          
          $st_message_html  = sprintf("Bonjour <strong>%s %s</strong>\n\n",$this->st_prenom,$this->st_nom);
          $st_message_html .= "Vous venez de demander un nouveau mot de passe &agrave; la base de l'AGC\n";
          $st_message_html .= "Afin de confirmer ce changement, merci de cliquer sur le lien ci-dessous ou de le copier/coller dans la barre de navigation de votre navigateur:\n";
          $st_message_html .= sprintf("<a href=\"%s/EnvoieNouveauMDP.php?idf_adht=%d&clef=%d\">%s/EnvoieNouveauMDP.php?idf_adht=%d&clef=%d</a>\n\n",$gst_url_site,$this->i_idf,$i_clef,$gst_url_site,$this->i_idf,$i_clef);
          $st_message_html .= "Cordialement,\n\nLes responsables du site";
          $st_message_html = nl2br($st_message_html);
          
          $st_message_texte = strip_tags(html_entity_decode($st_message_html)); 
          $st_sujet = "Demande d'un nouveau mot de passe AGC";
  
          $st_frontiere = '-----=' . md5(uniqid(mt_rand())); 
  
          $st_entete  = "From: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n>";
          $st_entete .= "Reply-to: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n";
          $st_entete .= "Reply-to: AGC <".EMAIL_DIRASSO.">\n";
          $st_entete .= 'MIME-Version: 1.0' . "\n"; 
          $st_entete .= 'Content-Type: multipart/alternative; boundary="'.$st_frontiere.'"';
          $st_message = 'Votre messagerie doit etre compatible MIME.'."\n\n";
          $st_message .= '--'.$st_frontiere."\n";
          $st_message .= 'Content-Type: text/plain; charset="cp1252"'."\n";
          $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
          $st_message .= $st_message_texte."\n\n";
          $st_message .= '--'.$st_frontiere."\n";
          $st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
          $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
          $st_message .= $st_message_html."\n\n";
          $st_message .= '--'.$st_frontiere."--\n";
          return (mail($this->st_email_perso,$st_sujet, $st_message, $st_entete));
          default:
            return false;
      }
   }
   
   /*
   *  V�rifie si la clef demand�e correspond � la clef courante de nouveau mot de passe
   *  @param integer $pi_clef clef
   *  @return true|false
   */
   function est_clef_nouveau_mdp($pi_clef)
   {
      return $this->i_clef_nouveau_mdp==$pi_clef; 
   }
  
  /*
  *  Se connecte au compte administrateur G�n�abank
  */
  private static function connexion_gbk()
  {              
    global $gst_administrateur_gbk,$gst_mdp_administrateur_gbk;
    $a_donnees = array('userid' => $gst_administrateur_gbk,'pass' => $gst_mdp_administrateur_gbk,'action'=>'login');
    $a_options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($a_donnees),
      )
    );
    $context  = stream_context_create($a_options);                                                                                                                
    $st_resultat = file_get_contents(self::$gst_url_gbk, false, $context);
    $a_matches= array();
    if (preg_match("/INPUT TYPE=HIDDEN NAME='sessionid' VALUE='([\d-]+)'/",$st_resultat,$a_matches))
    {
      self::$st_id_session_gbk=$a_matches[1];
      return true;
    }
    else
    { 
      self::$st_erreur_gbk=$st_resultat;
      return false;
    }  
   }
   
   /*
   *  Change le mot de passe geneabank de l'adh�rent
   */
   public function change_mdp_gbk($pst_nouveau_mdp)
   {
      global $gst_administrateur_gbk;
      if (!empty($gst_administrateur_gbk))
      { 
        if (self::connexion_gbk())
        {
          $a_donnees = array('userid' => $gst_administrateur_gbk,'sessionid'=>self::$st_id_session_gbk,'action'=>'changepwuser','changeuser'=>strtolower(PREFIXE_ADH_GBK).$this->i_idf,'newpw'=>$pst_nouveau_mdp);
            $a_options = array(
              'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($a_donnees),
            )
          );
          $context  = stream_context_create($a_options);
          $st_resultat = file_get_contents(self::$gst_url_gbk, false, $context);
          if (preg_match('/Changement de mot de passe fait/',$st_resultat))
            return true;
          else
          {
            self::$st_erreur_gbk=$st_resultat;
            return false;
          }
        }
        else       
          return false;
      }
        return true;    
   }
   
   
   
   /*
   *  Ex�cute une commande Geneabank
   *  @param string $pst_cmd commande a executer 
   */
   public static function execute_cmd_gbk($pst_cmd)
   {
      global $gst_administrateur_gbk;
      if (!empty($gst_administrateur_gbk))
      {
        if (self::connexion_gbk())
        {
          $a_donnees = array('userid' => $gst_administrateur_gbk,'sessionid'=>self::$st_id_session_gbk,'batch'=>$pst_cmd);
            $a_options = array(
            'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($a_donnees),
            )
          );
          $context  = stream_context_create($a_options);
          $st_resultat = file_get_contents(self::$gst_url_gbk, false, $context);  
          if (preg_match('/Commande ex�cut�e correctement/',$st_resultat))
            return true;
          else
          {
            self::$st_erreur_gbk=$st_resultat;
          }
        }
        else       
          return false;
     }
     else
      return true;  
   }
   
   /*
   * Cr�e l'adh�rent dans Geneabank
   */
   public function cree_utilisateur_gbk($pst_nouveau_mdp='')
   {
      if (!empty(pst_nouveau_mdp))
		     $this->st_mdp=$pst_nouveau_mdp;
      $st_cmd_gbk = sprintf("register AGC%d %s %s %s %s\n",$this->i_idf,$this->st_mdp,$this->st_email_perso,$this->st_nom,$this->st_prenom);
      $st_cmd_gbk .= "set ".PREFIXE_ADH_GBK.$this->i_idf." ".NB_POINTS_GBK."  Inscription\n";
      return self::execute_cmd_gbk($st_cmd_gbk);
   }
   
   /*
   * Supprime l'adh�rent de Geneabank
   */
   public function supprime_utilisateur_gbk()
   {
      $st_cmd_gbk = "set ".PREFIXE_ADH_GBK.$this->i_idf." 0  Suppression\n";
      $st_cmd_gbk .= sprintf("delete  %s%d\n",strtolower(PREFIXE_ADH_GBK),$this->i_idf);
      return self::execute_cmd_gbk($st_cmd_gbk);
   }   
   
   /*
   * Renvoie la derni�re erreur G�n�abank
   */
   public static function erreur_gbk()
   {
      return self::$st_erreur_gbk;
   }     
}
?>