<?php

class PaginationTableau {

   protected $connexionBD; 
   protected $pst_nom_script;
   protected $pst_param_numpage;       
   protected $i_nb_total_lignes;
   protected $i_nb_lignes_par_page;
   protected $i_nb_pages;
   protected $i_page_cour;
   protected $i_delta_navig;
   protected $st_requete; 
   protected $a_entete;
   protected $i_nb_select_page;
   
   /**
    * Constructeur
    * param string $pst_nom_script Nom du script qui utilise la pagination
    * param string $pst_param_numpage Paramètre GET du numéro de page
    * param integer $pi_nb_total_lignes Nombre total de lignes
    * param integer $pi_nb_lignes_par_page Nombre de lignes par page
    * param integer $pi_delta_navig Nombre de pages à présenter avant et après la page courante 
    * param array $pa_entete Tableau représentantant l'entête du tableau HTML                              
    */       
   public  function __construct ($pst_nom_script,$pst_param_numpage,$pi_nb_total_lignes,$pi_nb_lignes_par_page,$pi_delta_navig,$pa_entete) {     
     $this->st_nom_script=$pst_nom_script;
     $this->st_param_numpage=$pst_param_numpage;     
     $this->i_nb_total_lignes=$pi_nb_total_lignes;
     $this->i_nb_lignes_par_page=$pi_nb_lignes_par_page; 
     $this->i_nb_pages= ceil($pi_nb_total_lignes/$pi_nb_lignes_par_page);
     $this->i_delta_navig=$pi_delta_navig;
     $this->a_entete=$pa_entete;
     $this->i_nb_select_page=0;
   }
    
   /**
    * Initialise les paramètres liés à la connexion BD   
    * param object $pconnexionBD Connexion BD
    * param integer $pst_requete Requete SQL décrivant le résultat      
    */
   public function init_param_bd($pconnexionBD,$pst_requete) {
     $this->connexionBD=$pconnexionBD;
     $this->st_requete=$pst_requete; 
   }
          
   /**
    * Affiche l'entête de navigation liens
    * L'entête se presente sous la forme d'une liste d'ancres HTML [pagecourante - delta ... pagecourante ... pagecourante + delta]     
    */       
   public function affiche_entete_liens_navigation() {
     
  //   $i_deb = ($this->i_page_cour-$this->i_delta_navig)>0 ? ($this->i_page_cour-$this->i_delta_navig) : 1;
     $i_deb = 1;
     $i_fin = $this->i_nb_pages;
     print('<div class=alignCenter><br>');
     if ($i_fin>1)
        print "<a href=\"$this->st_nom_script?$this->st_param_numpage=1\">D&eacute;but</a> ";
     
     if ($i_deb<$i_fin)
     {  
        for ($i=$i_deb;$i<=$i_fin;$i++) {
          if ($i==$this->i_page_cour)
             print " <span style=\"font-weight:bold;\"
>- Page $i -</span> "; 
          else
             print "<a href=\"$this->st_nom_script?$this->st_param_numpage=$i\">$i</a> ";   
        }
     }
     if ($i_fin<$this->i_nb_pages)
        print " <a href=\"$this->st_nom_script?$this->st_param_numpage=$this->i_nb_pages\">Fin</a>";
     print("<br></div>"); 
   }
   
   
   /**
    * Affiche l'entête sous la forme d'une liste déroulante
    * @param string $pst_nom_formulaire nom du formulaire   
    */
    public function affiche_entete_liste_select($pst_nom_formulaire) {
    $this->i_nb_select_page++;    
     if ($this->i_nb_pages>1)
     {
        $st_nom_select = $this->st_param_numpage."_".$this->i_nb_select_page;
        $i_index_choisi = "document.$pst_nom_formulaire.$st_nom_select.selectedIndex";
        print("<div class=alignCenter><br>Page: <select name=$st_nom_select onChange=\"document.$pst_nom_formulaire.$this->st_param_numpage.value=document.$pst_nom_formulaire.$st_nom_select.options[$i_index_choisi].value;document.$pst_nom_formulaire.submit();\">");        
        for ($i=1;$i<=$this->i_nb_pages;$i++)
        {
           if ($i==$this->i_page_cour)
              print("<option value=$i selected>$i</option>\n");
           else
              print("<option value=$i>$i</option>\n");
        }
        print("</select></div>");
     } 
   }
     
   /**
    * Affiche le contenu du tableau correspondant ª $i_nb_lignes_par_page lignes de la page courante . La requete SQL est utilisée
    */       
   public function affiche_tableau_simple_requete_sql() {
      $st_requete = $this->st_requete;
      $i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
      $st_requete .= " limit $i_limite_inf,$this->i_nb_lignes_par_page" ;
      print("<div align=center><br><table border=1>");
      print("<tr>");
      foreach ($this->a_entete as $st_cell_entete) {
         print("<th>$st_cell_entete</th>");
      }
      print("</tr>\n");
      $a_lignes = $this->connexionBD->sql_select_multiple($st_requete);
      $i=0;
      foreach ($a_lignes as $a_ligne) {
         $st_class = ($i%2==0) ? 'ligne_paire':  'ligne_impaire';
         print("<tr class=$st_class>");
         foreach ($a_ligne as $st_champ)
         {
            if ($st_champ!="")
              print("<td>$st_champ</td>");
            else
              print("<td>&nbsp;</td>");
         }         
         print("</tr>\n");
         $i++;
      }      
      print("</table>");
      // paramètre pour gérer le numéro de page dans le cas d'un numéro de page envoyé par méthode POST
      print("<input type=hidden name=$this->st_param_numpage value=\"\"><br></div>"); 
   }   

   /**
    * Affiche le contenu du tableau correspondant ª $i_nb_lignes_par_page lignes de la page courante . La requete SQL est utilisée
    */       
   public function affiche_tableau_simple($pa_tableau) {
      $i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
      $pa_tableau=array_slice($pa_tableau,$i_limite_inf,$this->i_nb_lignes_par_page);
      print("<div align=center><br><table border=1>");
      print("<tr>");
      foreach ($this->a_entete as $st_cell_entete) {
         print("<th>$st_cell_entete</th>");
      }
      print("</tr>\n");
      $i=0;
      foreach ($pa_tableau as $a_ligne) {
         $st_class = ($i%2==0) ? 'ligne_paire':  'ligne_impaire';
         print("<tr class=$st_class>");
         foreach ($a_ligne as $st_champ)
         {
            if ($st_champ!="")
              print("<td>$st_champ</td>");
            else
              print("<td>&nbsp;</td>");   
         }         
         print("</tr>\n");
         $i++;
      }      
      print("</table>");
      // paramètre pour gérer le numéro de page dans le cas d'un numéro de page envoyé par méthode POST
      print("<input type=hidden name=$this->st_param_numpage value=\"\"><br></div>"); 
   }   


 /**
    * Affiche le contenu du tableau correspondant ª $i_nb_lignes_par_page lignes de la page courante  
    */       
   public function affiche_tableau_edition() {
      $st_requete = $this->st_requete;
      $i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
      $st_requete .= " limit $i_limite_inf,$this->i_nb_lignes_par_page" ;
      print("<div align=center><br><table border=1>");
      print("<tr>");
      foreach ($this->a_entete as $st_cell_entete) {
         print("<th>$st_cell_entete</th>");
      }
      print("</tr>\n");
      $a_lignes = $this->connexionBD->sql_select_multiple($st_requete);
      $i=0;
      foreach ($a_lignes as $a_ligne) {
         $idf_element = array_shift($a_ligne);
         $st_class = ($i%2==0) ? 'ligne_paire':  'ligne_impaire';
         print("<tr class=$st_class>");
         $st_nom_col1 = preg_replace('/\s/','_',$a_ligne[0]);
         foreach ($a_ligne as $st_nom_element)
         {
            if ($st_nom_element!= '')
               print("<td>$st_nom_element</td>");
            else
               print("<td>&nbsp;</td>");   
         }
                  
         print("<td align=center><input type=button id=\"bouton$idf_element\" value=Modifier onClick=\"document.location.href='$this->st_nom_script?mod=$idf_element'\"></td>");
         print("<td align=center><input type=checkbox name=\"supp[]\" id=\"$st_nom_col1\" value=$idf_element></td>"); 
         print("</tr>\n");
         $i++;
      }      
      print("</table>");
      // paramètre pour gérer le numéro de page dans le cas d'un numéro de page envoyé par méthode POST
      print("<input type=hidden name=$this->st_param_numpage value=\"\"><br></div>"); 
   }   
    
/**
    * Affiche le contenu du tableau correspondant ª $i_nb_lignes_par_page lignes de la page courante  
    */       
   public function affiche_tableau_edition_remplacer() {
      $st_requete = $this->st_requete;
      $i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
      $st_requete .= " limit $i_limite_inf,$this->i_nb_lignes_par_page" ;
      print("<div align=center><br><table border=1>");
      print("<tr>");
      foreach ($this->a_entete as $st_cell_entete) {
         print("<th>$st_cell_entete</th>");
      }
      print("</tr>\n");
      $a_lignes = $this->connexionBD->sql_select_multiple($st_requete);
      $i=0;
      foreach ($a_lignes as $a_ligne)
	  {
         $idf_element = array_shift($a_ligne);
         $st_class = ($i%2==0) ? 'ligne_paire':  'ligne_impaire';
         print("<tr class=$st_class>");
         $st_nom_col1 = preg_replace('/\s/','_',$a_ligne[0]);
         foreach ($a_ligne as $st_nom_element)
         {
            if ($st_nom_element!= '')
               print("<td>$st_nom_element</td>");
            else
               print("<td>&nbsp;</td>");   
         }
                  
         print("<td align=center><input type=button id=\"bouton$idf_element\" value=Modifier onClick=\"document.location.href='$this->st_nom_script?mod=$idf_element'\"></td>");
         print("<td align=center><input type=button id=\"boutonR$idf_element\" value=Fusionner onClick=\"document.location.href='$this->st_nom_script?remp=$idf_element'\"></td>");
         print("</tr>\n");
         $i++;
      }      
      print("</table>");
      // paramètre pour gérer le numéro de page dans le cas d'un numéro de page envoyé par méthode POST
      print("<input type=hidden name=$this->st_param_numpage value=\"\"><br></div>"); 
   }   
    
   /**
   * Affiche le contenu du tableau correspondant spéciale pour les sondages
   * @param string $st_type type de question  
   */       
   public function affiche_tableau_edition_sondage($type) {
      $st_requete = $this->st_requete;
      $i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
      $st_requete .= " limit $i_limite_inf,$this->i_nb_lignes_par_page" ;
      print("<div align=center><table border=1>");
      print("<tr>");
      foreach ($this->a_entete as $st_cell_entete) {
         print("<th>$st_cell_entete</th>");
      }
      print("</tr>\n");
      $a_lignes = $this->connexionBD->sql_select_multiple($st_requete);
      $i=0;
      foreach ($a_lignes as $a_ligne) {
         $idf_element = array_shift($a_ligne);
         $st_class = ($i%2==0) ? 'ligne_paire':  'ligne_impaire';
         print("<tr class=$st_class>");
         $st_nom_col1 = $a_ligne[0];
         foreach ($a_ligne as $st_nom_element)
         {
            if ($st_nom_element!= '')
               print("<td>$st_nom_element</td>");
            else
               print("<td>&nbsp;</td>");   
         }
                  
         print("<td align=center><input type=button id=\"$idf_element\" value=Réponse onClick=\"document.location.href='$this->st_nom_script?mod=$idf_element&type=$st_type'\"></td>"); 
         print("</tr>\n");
         $i++;
      }      
      print("</table>");
      // paramètre pour gérer le numéro de page dans le cas d'un numéro de page envoyé par méthode POST
      print("<input type=hidden name=$this->st_param_numpage value=\"\"><br></div>"); 
   }      
   
   /**
    * Met ª jour le num‚ro de page courante   
    * param integer $pi_page_cour Num‚ro de la page courante 
    */       
   public function init_page_cour($pi_page_cour) {
     if ($pi_page_cour<1)
        $pi_page_cour=1;
     if ($pi_page_cour>$this->i_nb_pages)
        $pi_page_cour=$this->i_nb_pages;
     $this->i_page_cour=$pi_page_cour;       
   }
   
   /*
   * Renvoie le nombre de pages à afficher
   * @return integer nombre de pages   
   */
   public function nb_pages() {
      return $this->i_nb_pages;
   }
   
	/**
	 * Affiche le contenu du tableau correspondant ª $i_nb_lignes_par_page lignes de la page courante bouton modifier remplacé par un bouton Sélectionner, par des cases à cocher
	 */       
	public function affiche_tableau_edition_select() {
		$st_requete = $this->st_requete;
		$i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
		$st_requete .= " limit $i_limite_inf,$this->i_nb_lignes_par_page" ;
		print("<div align=center><br><table border=1>");
		print("<tr>");
		foreach ($this->a_entete as $st_cell_entete) {
			print("<th>$st_cell_entete</th>");
		}
		print("</tr>\n");
		$a_lignes = $this->connexionBD->sql_select_multiple($st_requete);
		$i=0;
		foreach ($a_lignes as $a_ligne) {
			$idf_element = array_shift($a_ligne);
			$st_class = ($i%2==0) ? 'ligne_paire':  'ligne_impaire';
			print("<tr class=$st_class>");
			$st_nom_col1 = preg_replace('/\s/','_',$a_ligne[0]);
			foreach ($a_ligne as $st_nom_element)
			{
				if ($st_nom_element!= '')
				print("<td>$st_nom_element</td>");
				else
				print("<td>&nbsp;</td>");   
			}
			
			print("<td align=center><input type=button id=\"bouton$idf_element\" value=Sélectionner onClick=\"document.location.href='$this->st_nom_script?mod=$idf_element'\"></td>");
			print("</tr>\n");
			$i++;
		}      
		print("</table>");
		// paramètre pour gérer le numéro de page dans le cas d'un numéro de page envoyé par méthode POST
		print("<input type=hidden name=$this->st_param_numpage value=\"\"><br></div>"); 
	}
  
  /**
   * Affiche la liste des pages
   * @param integer $total  nombre total de résultats
   * @param integer $per_page nombre de résultats par page
   * @param integer $current_page numéro de la courante
   */
  public function get_pagination($total, $per_page, $current_page = 0) {

  $nb_pages = ceil($total/$per_page);
  $nav = '<div class="alignCenter" style="width:800px;margin-left:auto;margin-right:auto"><br>';
  if($current_page > 0){
    $nav .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=0" title="Premi&eacute;re page"> << </a> ';
    $nav .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page='. ($current_page-1) .'" title="Page pr&eacute;c&eacute;dente"> < Page pr&eacute;c&eacute;dente</a> ';
  }
    $nav .= ' | ';
  if($current_page + 1 < $nb_pages){
    $nav .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page='. ($current_page+1) .'" title="Page suivante"> Page suivante > </a> ';
    $nav .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page='. ($nb_pages - 1) .'" title="Derni&egrave;re page"> >> </a> ';
  }
  $nav .= '<br><br>';

  for($i = 0; $i < $nb_pages; $i++) {
       if($i == $current_page){
           $nav .= '<span style="font-weight:bold;">- Page '. ($i+1) .' -</span>';
       } else {
            $nav .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page='. $i .'">' . ($i+1) . '</a> ';
       }
  }



  $nav .= '</div>';

  return $nav;
}
   
	
}
?>