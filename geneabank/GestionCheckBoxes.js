function SelectionneTousActes(Formulaire,IdfElement)
{   
	// Au moins deux éléments 
  for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)
  {
     document.forms[Formulaire].elements[IdfElement][i].checked=true;
  }                      
}
function DeselectionneTousActes(Formulaire,IdfElement)
{   
	// Au moins deux éléments 
  for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)
  {
     document.forms[Formulaire].elements[IdfElement][i].checked=false;
  }                      
}

function ValideFormulaire(Formulaire,IdfElement)
{
   var NbActes=0;
   // Un seul élément
	 if (document.forms[Formulaire].elements[IdfElement].checked)
	 {
		  NbActes++;
	 }
	 // Au moins deux éléments 
   for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)
   {
       if (document.forms[Formulaire].elements[IdfElement][i].checked)
          NbActes++
   }
   if (NbActes==0)
   {
      alert("Aucun acte sélectionné");
      return false;
   }
   else
      return true;                                                                                                                                                                                                                            
}