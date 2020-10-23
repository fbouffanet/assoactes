
// Verification des champs du menu recherche
function VerifieChampsRecherche(Formulaire,Mode)
{
   var ListeErreurs	= "";
   
   switch (Mode)
   {
      case 'RechercheCouple' :
                     document.forms[Formulaire].action ="reponsesgbkcouple.php";
                     var nom_epx	= document.forms[Formulaire].nom_epx.value;
                     var nom_epse	= document.forms[Formulaire].nom_epse.value;
                     if (nom_epx=="")
                     {
                        ListeErreurs+= "Le nom de l'époux est vide\n";
                     }
                     else if (nom_epx.length<3)
                     {
                        ListeErreurs+= "Le nom de l'époux doit comporter au moins trois caractères\n";
                     }
                     if (nom_epse=="")
                     {
                        ListeErreurs+= "Le nom de l'épouse est vide\n";
                     }                     
                     else if (nom_epse.length<3)
                     {
                        ListeErreurs+= "Le nom de l'épouse doit comporter au moins trois caractères\n";
                     } 
                     break;
      case 'RecherchePersonne' :
                      document.forms[Formulaire].action ="reponsesgbkpersonne.php";
                      var nom	= document.forms[Formulaire].nom.value;
                      if (nom=="")
                      {
                        ListeErreurs+= "Un nom de personne doit etre saisi\n";
                      }
                      else if (nom.length<3)
                      {
                        ListeErreurs+= "Le nom doit comporter au moins trois caractères\n";
                      }
                      break;                
      default: alert('Type de recherche inconnu :' + document.forms[Formulaire].recherche.value); 
   }   
   if (ListeErreurs!= "")
   {
      alert(ListeErreurs);
   }
   else
   {
      document.forms[Formulaire].submit();
   }

}

function RazChamps(Formulaire)
{
   document.forms[Formulaire].nom_epx.value ="";
   document.forms[Formulaire].prenom_epx.value="";
   document.forms[Formulaire].nom_epse.value="";
   document.forms[Formulaire].prenom_epse.value="";
   document.forms[Formulaire].annee_min.value="";
   document.forms[Formulaire].annee_max.value="";
   document.forms[Formulaire].rayon.value="";
   document.forms[Formulaire].idf_commune.selectedIndex = document.forms[Formulaire].idf_commune.length-1;
   document.forms[Formulaire].idf_type_acte.selectedIndex = document.forms[Formulaire].idf_type_acte.length-1;
   document.forms[Formulaire].nom.value ="";
   document.forms[Formulaire].prenom.value="";
   document.forms[Formulaire].sexe.selectedIndex = document.forms[Formulaire].sexe.length-1;
   document.forms[Formulaire].idf_type_presence.selectedIndex = document.forms[Formulaire].idf_type_presence.length-1;
}

function SoumissionPersonne(Formulaire,Evt) 
{   
  if (Evt.keyCode == 13)  {     
      VerifieChampsRecherche(0,'RecherchePersonne'); 
  }
}

function SoumissionCouple(Formulaire,Evt) 
{   
  if (Evt.keyCode == 13)  {     
      VerifieChampsRecherche(0,'RechercheCouple'); 
  }
}
