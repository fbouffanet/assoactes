function VerifieChamps(Formulaire)
{
   var Ident = document.forms[Formulaire].ident.value;
   var Mdp	= document.forms[Formulaire].mdp.value;
   var ListeErreurs	= "";
   if (Ident=="")
   {
       ListeErreurs+= "L'identifiant est vide\n";
   }
   if (Mdp=="")
   {
       ListeErreurs+= "Le mot de passe est vide\n";
   }   
   if (ListeErreurs!= "")
   {
      alert(ListeErreurs);
      return false;
   }
   else
   {
      document.forms[Formulaire].submit();
   }   
}
