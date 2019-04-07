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
    * param string $pst_param_numpage Param�tre GET du num�ro de page
    * param integer $pi_nb_total_lignes Nombre total de lignes
    * param integer $pi_nb_lignes_par_page Nombre de lignes par page
    * param integer $pi_delta_navig Nombre de pages � pr�senter avant et apr�s la page courante 
    * param array $pa_entete Tableau repr�sentantant l'ent�te du tableau HTML                              
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
    * Initialise les param�tres li�s � la connexion BD   
    * param object $pconnexionBD Connexion BD
    * param integer $pst_requete Requete SQL d�crivant le r�sultat      
    */
   public function init_param_bd($pconnexionBD,$pst_requete) {
     $this->connexionBD=$pconnexionBD;
     $this->st_requete=$pst_requete; 
   }
          
   /**
    * Affiche l'ent�te de navigation liens
    * L'ent�te se presente sous la forme d'une liste d'ancres HTML [pagecourante - delta ... pagecourante ... pagecourante + delta]     
    */       
   public function affiche_entete_liens_navigation() {
     $i_deb = 1;
     $i_fin = $this->i_nb_pages;
     print('<div class="text-center">');
     print('<ul class="pagination">');
     if ($i_fin>1)
        print("<li class=\"page-item\"><a href=\"$this->st_nom_script?$this->st_param_numpage=1\" class=\"page-item\">D&eacute;but</a></li> "); 
     if ($i_deb<$i_fin)
     {  
        for ($i=$i_deb;$i<=$i_fin;$i++) {
          if ($i==$this->i_page_cour)
			  print("<li class=\"page-item active\"><span class=\"page-link\">$i<span class=\"sr-only\">(current)</span></span></li>");
          else
			print("<li class=\"page-item\"><a href=\"$this->st_nom_script?$this->st_param_numpage=$i\" class=\"page-item\">$i</a></li> ");  
        }
     }
     if ($i_fin<$this->i_nb_pages)
		print("<li class=\"page-item\"><a href=\"$this->st_nom_script?$this->st_param_numpage=$this->i_nb_pages\" class=\"page-item\">Fin</a></li>");  
     print("</ul>");
     print("</div>");  
   }
   
   
   /**
    * Affiche l'ent�te sous la forme d'une liste d�roulante
    * @param string $pst_nom_formulaire nom du formulaire   
    */
    public function affiche_entete_liste_select($pst_nom_formulaire) {
    $this->i_nb_select_page++;    
     if ($this->i_nb_pages>1)
     {
        $st_nom_select = $this->st_param_numpage."_".$this->i_nb_select_page;
        $i_index_choisi = "document.$pst_nom_formulaire.$st_nom_select.selectedIndex";
        print("<div class=\"form-group row col-md-12\">");
		print("<label for=\"$st_nom_select\" class=\"col-form-label col-md-2 col-md-offset-3\">Page:</label>");
		print('<div class="col-md-2">');
		print("<select name=$st_nom_select id=\"$st_nom_select\" onChange=\"document.$pst_nom_formulaire.$this->st_param_numpage.value=document.$pst_nom_formulaire.$st_nom_select.options[$i_index_choisi].value;document.$pst_nom_formulaire.submit();\" class=\"form-control\">");        
        for ($i=1;$i<=$this->i_nb_pages;$i++)
        {
           if ($i==$this->i_page_cour)
              print("<option value=$i selected>$i</option>\n");
           else
              print("<option value=$i>$i</option>\n");
        }
        print("</select>");
		print("</div></div>");
     } 
   }
     
   /**
    * Affiche le contenu du tableau correspondant � $i_nb_lignes_par_page lignes de la page courante . La requete SQL est utilis�e
    */       
   public function affiche_tableau_simple_requete_sql() {
      $st_requete = $this->st_requete;
      $i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
      $st_requete .= " limit $i_limite_inf,$this->i_nb_lignes_par_page" ;
      print("<table class=\"table table-bordered table-striped\">");
      print("<thead><tr>");
      foreach ($this->a_entete as $st_cell_entete) {
         print("<th>$st_cell_entete</th>");
      }
      print("</tr></thead>\n");
	  print('<tbody>');
      $a_lignes = $this->connexionBD->sql_select_multiple($st_requete);
      $i=0;
      foreach ($a_lignes as $a_ligne) {
         print("<tr>");
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
      print('</tbody>');      
      print("</table>");
      // param�tre pour g�rer le num�ro de page dans le cas d'un num�ro de page envoy� par m�thode POST
      print("<input type=hidden name=$this->st_param_numpage value=\"\">"); 
   }   

   /**
    * Affiche le contenu du tableau correspondant � $i_nb_lignes_par_page lignes de la page courante . La requete SQL est utilis�e
    */       
   public function affiche_tableau_simple($pa_tableau) {
      $i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
      $pa_tableau=array_slice($pa_tableau,$i_limite_inf,$this->i_nb_lignes_par_page);
      print("<table class=\"table table-bordered table-striped\">");
      print("<thead><tr>");
      foreach ($this->a_entete as $st_cell_entete) {
         print("<th>$st_cell_entete</th>");
      }
      print("</tr></thead>\n");
	  print('<tbody>');
      $i=0;
      foreach ($pa_tableau as $a_ligne) {
         print("<tr>");
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
      print('</tbody>');      
      print("</table>");
      // param�tre pour g�rer le num�ro de page dans le cas d'un num�ro de page envoy� par m�thode POST
      print("<input type=hidden name=$this->st_param_numpage value=\"\">"); 
   }   


 /**
    * Affiche le contenu du tableau correspondant � $i_nb_lignes_par_page lignes de la page courante  
    */       
   public function affiche_tableau_edition() {
      $st_requete = $this->st_requete;
      $i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
      $st_requete .= " limit $i_limite_inf,$this->i_nb_lignes_par_page" ;
      print("<table class=\"table table-bordered table-striped\">");
      print("<thead><tr>");
      foreach ($this->a_entete as $st_cell_entete) {
         print("<th>$st_cell_entete</th>");
      }
      print("</tr></thead>\n");
      print('<tbody>');
	  $a_lignes = $this->connexionBD->sql_select_multiple($st_requete);
      $i=0;
      foreach ($a_lignes as $a_ligne) {
         $idf_element = array_shift($a_ligne);
         print("<tr>");
         $st_nom_col1 = preg_replace('/\s/','_',$a_ligne[0]);
         foreach ($a_ligne as $st_nom_element)
         {
            if ($st_nom_element!= '')
               print("<td>$st_nom_element</td>");
            else
               print("<td>&nbsp;</td>");   
         }
                  
		 print(sprintf("<td><a class=\"btn btn-primary btn-block\" type=button id=\"bouton%d\" href=\"%s?mod=%d\" role=\"button\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier</a></td>",$idf_element,$_SERVER['PHP_SELF'],$idf_element));
         print("<td><div class=\"lib_erreur\"><div class=\"checkbox\"><label><input type=checkbox name=\"supp[]\" id=\"$st_nom_col1\" value=$idf_element class=\"form-check-input\"></label></div></div></td>"); 
         print("</tr>\n");
         $i++;
      }
      print('</tbody>');      
      print("</table>");
      // param�tre pour g�rer le num�ro de page dans le cas d'un num�ro de page envoy� par m�thode POST
      print("<input type=hidden name=$this->st_param_numpage value=\"\">"); 
   }   
    
/**
    * Affiche le contenu du tableau correspondant � $i_nb_lignes_par_page lignes de la page courante  
    */       
   public function affiche_tableau_edition_remplacer() {
      $st_requete = $this->st_requete;
      $i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
      $st_requete .= " limit $i_limite_inf,$this->i_nb_lignes_par_page" ;
      print("<table class=\"table table-bordered table-striped\">");
      print("<thead><tr>");
      foreach ($this->a_entete as $st_cell_entete) {
         print("<th>$st_cell_entete</th>");
      }
      print("</tr></thead>\n");
	  print('<tbody>');
      $a_lignes = $this->connexionBD->sql_select_multiple($st_requete);
      $i=0;
      foreach ($a_lignes as $a_ligne)
	  {
         $idf_element = array_shift($a_ligne);
         print("<tr>");
         $st_nom_col1 = preg_replace('/\s/','_',$a_ligne[0]);
         foreach ($a_ligne as $st_nom_element)
         {
            if ($st_nom_element!= '')
               print("<td>$st_nom_element</td>");
            else
               print("<td>&nbsp;</td>");   
         }
                  
         print("<td><input type=button id=\"bouton$idf_element\" class=\"btn btn-primary btn-block\" value=\"Modifier\" onClick=\"document.location.href='$this->st_nom_script?mod=$idf_element'\"></td>");
         print("<td><input type=button id=\"boutonR$idf_element\" class=\"btn btn-primary btn-block\" value=Fusionner onClick=\"document.location.href='$this->st_nom_script?remp=$idf_element'\"></td>");
         print("</tr>\n");
         $i++;
      }
      print('</tbody>');       
      print("</table>");
      // param�tre pour g�rer le num�ro de page dans le cas d'un num�ro de page envoy� par m�thode POST
      print("<input type=hidden name=$this->st_param_numpage value=\"\">"); 
   }     
   
   /**
    * Met � jour le num�ro de page courante   
    * param integer $pi_page_cour Num�ro de la page courante 
    */       
   public function init_page_cour($pi_page_cour) {
     if ($pi_page_cour<1)
        $pi_page_cour=1;
     if ($pi_page_cour>$this->i_nb_pages)
        $pi_page_cour=$this->i_nb_pages;
     $this->i_page_cour=$pi_page_cour;       
   }
   
   /*
   * Renvoie le nombre de pages � afficher
   * @return integer nombre de pages   
   */
   public function nb_pages() {
      return $this->i_nb_pages;
   }
   
	/**
	 * Affiche le contenu du tableau correspondant � $i_nb_lignes_par_page lignes de la page courante bouton modifier remplac� par un bouton S�lectionner, par des cases � cocher
	 */       
	public function affiche_tableau_edition_select() {
		$st_requete = $this->st_requete;
		$i_limite_inf = ($this->i_page_cour-1)*$this->i_nb_lignes_par_page;
		$st_requete .= " limit $i_limite_inf,$this->i_nb_lignes_par_page" ;
		print("<table class=\"table table-bordered table-striped\">");
		print("<thead><tr>");
		foreach ($this->a_entete as $st_cell_entete) {
			print("<th>$st_cell_entete</th>");
		}
		print("</tr></thead>\n");
		print('<tbody>');
		$a_lignes = $this->connexionBD->sql_select_multiple($st_requete);
		$i=0;
		foreach ($a_lignes as $a_ligne) {
			$idf_element = array_shift($a_ligne);
			print("<tr>");
			$st_nom_col1 = preg_replace('/\s/','_',$a_ligne[0]);
			foreach ($a_ligne as $st_nom_element)
			{
				if ($st_nom_element!= '')
				print("<td>$st_nom_element</td>");
				else
				print("<td>&nbsp;</td>");   
			}
			
			print("<td><input type=button class=\"btn btn-primary btn-block\" id=\"bouton$idf_element\" value=S�lectionner onClick=\"document.location.href='$this->st_nom_script?mod=$idf_element'\"></td>");
			print("</tr>\n");
			$i++;
		}
        print('<t/body>');		
		print("</table>");
		// param�tre pour g�rer le num�ro de page dans le cas d'un num�ro de page envoy� par m�thode POST
		print("<input type=hidden name=$this->st_param_numpage value=\"\">"); 
	}
  
  /**
   * Affiche la liste des pages
   * @param integer $total  nombre total de r�sultats
   * @param integer $per_page nombre de r�sultats par page
   * @param integer $current_page num�ro de la courante
   */
  public function get_pagination($total, $per_page, $current_page = 0) {

  $nb_pages = ceil($total/$per_page);
  $nav = '<div class="text-center"><ul class="pagination">';
  if($current_page > 0){
    $nav .= '<li class="page-item"> <a href="' . $_SERVER['PHP_SELF'] . '?page=0" aria-label="Premi&eacute;re page"><span aria-hidden="true">&laquo;</span> <span class="sr-only">Premi&eagre;re page </span></a></li>';
    $nav .= '<li class="page-item">  <a href="' . $_SERVER['PHP_SELF'] . '?page='. ($current_page-1) .'" aria-label="Page pr&eacute;c&eacute;dente"> Page pr&eacute;c&eacute;dente</a></li>';
  }
  if($current_page + 1 < $nb_pages){
    $nav .= '<li class="page-item">  <a href="' . $_SERVER['PHP_SELF'] . '?page='. ($current_page+1) .'" aria-label="Page suivante"> Page suivante > </a> </li>';
    $nav .= '<li class="page-item"> <a href="' . $_SERVER['PHP_SELF'] . '?page='. ($nb_pages - 1) .'" aria-label="Derni&egrave;re page"> <span aria-hidden="true">&raquo;</span><span class="sr-only">Derni&egrave;re Page</span></a></li>';
  }
  $nav .= '</ul>';
  $nav .= '<ul class="pagination justify-content-center">'; 
  for($i = 0; $i < $nb_pages; $i++) {
       if($i == $current_page){
           $nav .= '<li class="page-item active"> <span class="page-link">'. ($i+1) .'<span class="sr-only">(current)</span></span></li>';
       } else {
            $nav .= '<li class="page-item"> <a href="' . $_SERVER['PHP_SELF'] . '?page='. $i .'">' . ($i+1) . '</a></li>';
       }
  }
  $nav .= '</ul></div>';
  return $nav;
}
   
	
}
?>