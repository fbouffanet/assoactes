<script type='text/javascript'>
sfHover = function() {
        var sfEls = document.getElementById("MenuAGC").getElementsByTagName("LI");
        for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                        this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                }
        }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
</script>
<?php
// connexion BD doit avoir été chargé
$a_categories_menu =$connexionBD->sql_select_multiple("select libelle,script,droit from categorie_menu order by rang");
$a_elements_menu =$connexionBD->liste_valeur_par_doubles_clefs("select categorie, libelle, script,droit from element_menu order by categorie,rang");
if (isset($_SESSION['ident']))
  $a_privileges_utilisateur = $connexionBD->sql_select("select droit from privilege join adherent on (adherent.idf=privilege.idf_adherent) where ident=\"".$_SESSION['ident']."\""); 
else
  $a_privileges_utilisateur = array();

$gst_racine_site = $gst_url_site;
//print("\n<!--[if IE]><div  class=\"ContenuMenuIE\"><![endif]-->\n");
print("<div>");
print('<ul id="MenuAGC" >');

foreach ($a_categories_menu as $a_categorie)
{
   list($st_categorie,$st_script,$st_droit) = $a_categorie;
   if ($st_droit=='' || in_array($st_droit,$a_privileges_utilisateur))
   {  
      print("<li>\n");
      if ($st_script=='')        
         print("<a href=\"#\">$st_categorie</a>\n");
      else if (preg_match('/^http\:\/\//',$st_script))
                 print("<a href=\"$st_script\" target=\"_blank\">$st_categorie</a>\n");   
      else 
         print("<a href=\"$gst_racine_site/$st_script\">$st_categorie</a>\n");            
      if (isset($a_elements_menu[strval($st_categorie)]))
      {
         $a_elements_categorie = $a_elements_menu[strval($st_categorie)]; 
//         print("<ul class=\"Menu\">\n");
         print("<ul>\n");
         foreach ($a_elements_categorie as $st_libelle => $a_elements)
         {
           list($st_script,$st_droit)= $a_elements;
           if ($st_droit=='' || in_array($st_droit,$a_privileges_utilisateur))
           {
              print("<li>");
              if ($st_script=='')
                 print("$st_libelle\n");
              else if (preg_match('/^http\:\/\//',$st_script))
                 print("<a href=\"$st_script\" target=\"_blank\">$st_libelle</a>\n");   
              else
                 print("<a href=\"$gst_racine_site/$st_script\">$st_libelle</a>\n");
              print("</li>");   
           }
         }
         print("</ul>\n");
      }
      print("</li>\n");
   }   
}

//print ('</ul><br><br><br>');

print ('</ul><br><br><br></div>');