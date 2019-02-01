
<?php
// connexion BD doit avoir été chargé
$a_categories_menu =$connexionBD->sql_select_multiple("select libelle,script,droit from categorie_menu order by rang");
$a_elements_menu =$connexionBD->liste_valeur_par_doubles_clefs("select categorie, libelle, script,droit from element_menu order by categorie,rang");
if (isset($_SESSION['ident']))
  $a_privileges_utilisateur = $connexionBD->sql_select("select droit from privilege join adherent on (adherent.idf=privilege.idf_adherent) where ident=\"".$_SESSION['ident']."\""); 
else
  $a_privileges_utilisateur = array();

$gst_racine_site = $gst_url_site;

<<<<<<< HEAD
print("<nav class=\"navbar navbar-default navbar-static-top\">\n");
=======


//print("<nav class=\"navbar navbar-default navbar-static-top\">\n");
print("<nav class=\"navbar navbar-default\">\n");
>>>>>>> 893f373b4448b6ca63cbd3e9430b43c9b5cd723a
print("<ul class=\"nav navbar-nav\">\n");
foreach ($a_categories_menu as $a_categorie)
{
   list($st_categorie,$st_script,$st_droit) = $a_categorie;
   if ($st_droit=='' || in_array($st_droit,$a_privileges_utilisateur))
   {        
      if (isset($a_elements_menu[strval($st_categorie)]))
      {
         $st_script= empty($st_script) ?  '#': $st_script;
         print("<li class=\"dropdown\"><a data-toggle=\"dropdown\" href=\"$st_script\">$st_categorie<b class=\"caret\"></b></a>\n");
         $a_elements_categorie = $a_elements_menu[strval($st_categorie)]; 
         print("<ul class=\"dropdown-menu\">\n");
         foreach ($a_elements_categorie as $st_libelle => $a_elements)
         {
           list($st_script,$st_droit)= $a_elements;
           if ($st_droit=='' || in_array($st_droit,$a_privileges_utilisateur))
           {
              print("<li>");
              if ($st_script=='')
                 print("$st_libelle\n");
              else if (preg_match('/^http\:\/\//',$st_script))
                 print("<a href=\"$st_script\" target=\"_blank\">$st_libelle</a>");   
              else
                 print("<a href=\"$gst_racine_site/$st_script\">$st_libelle</a>");
              print("</li>\n");   
           }
         }
         print("</ul></li>\n");
      }
      else
<<<<<<< HEAD
      {
        if ($st_script=='')        
          print("<li ><a href=\"#\">$st_categorie</a>\n");
        else if (preg_match('/^http\:\/\//',$st_script))
          print("<li ><a href=\"$st_script\" target=\"_blank\">$st_categorie</a>\n"); 
        else 
          print("<li ><a href=\"$st_script\">$st_categorie</a>\n");
      }  
=======
        print("<li><a href=\"$st_script\">$st_categorie</a></li>\n");
>>>>>>> 893f373b4448b6ca63cbd3e9430b43c9b5cd723a
   }   
}
print ('</ul></nav>');