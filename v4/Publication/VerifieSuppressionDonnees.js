// Verification des champs du menu recherche
function VerifieSuppression(Formulaire)
{
   var ListeErreurs	= "";
   var ChaineConfirmation = "";
   var idf_source	= document.forms[Formulaire].idf_source.selectedIndex;
   var idf_commune_acte	= document.forms[Formulaire].idf_commune_acte.selectedIndex;
   var idf_type_acte	= document.forms[Formulaire].idf_type_acte.selectedIndex;
   
   if (idf_source==-1)
   {
      ListeErreurs+="Aucune source selectionnee\n";
   }
   if (idf_commune_acte==-1)
   {
      ListeErreurs+="Aucune commune_acte selectionnee\n";
   }
   if (ListeErreurs!= "")
   {
      alert(ListeErreurs);
      return false;
   }
   ChaineConfirmation += "Source: ";
   ChaineConfirmation += document.forms[Formulaire].idf_source.options[idf_source].text ;
   ChaineConfirmation += "\n";
   ChaineConfirmation += "Commune: ";
   ChaineConfirmation += document.forms[Formulaire].idf_commune_acte.options[idf_commune_acte].text ;
   ChaineConfirmation += "\n";
   ChaineConfirmation += "Type d'acte: ";
   ChaineConfirmation += document.forms[Formulaire].idf_type_acte.options[idf_type_acte].text ;
   ChaineConfirmation += "\n";
   if (window.confirm("Souhaitez-vous SUPPRIMER les actes répondant aux paramètres suivants ?\n" +ChaineConfirmation))
   {
       document.forms[Formulaire].mode.value='SUPPRESSION';
       document.forms[Formulaire].submit();
   }
}
