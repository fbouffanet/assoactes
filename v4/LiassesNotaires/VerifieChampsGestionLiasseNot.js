
function VerifieSuppression(Formulaire,IdfElement)
{
  var chaine="";
  // Un seul �l�ment
	if (document.forms[Formulaire].elements[IdfElement].checked)	{
		 chaine+=document.forms[Formulaire].elements[IdfElement].id;
	}
	// Au moins deux �l�ments 
  for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)  {
      if (document.forms[Formulaire].elements[IdfElement][i].checked)      {
         chaine+=document.forms[Formulaire].elements[IdfElement][i].id+"\n";
      }
  }
  if (chaine=="")  {
     alert("Pas de liasse s�lectionn�e");
  }
  else  {
   	 Message="Etes-vous s�r de supprimer ces liasses :\n"+chaine+"?";
   	 if (confirm(Message))        {                                                                                                                                    
        document.forms[Formulaire].submit();                                                           
     }
  }
}

function VerifieChamps(Formulaire){
	var mode_enr = document.forms[Formulaire].mode_enr.value;
	var depose_ad = document.forms[Formulaire].depose_ad.checked;
	var selectElmt = document.getElementById('dept_depose');
	var dept_depose_ad = selectElmt.options[selectElmt.selectedIndex].value;
	var ListeErreurs	= "";
	if( mode_enr == 'A' ){
		var numero = document.forms[Formulaire].numero.value;
		if( numero == '' ) {
			ListeErreurs+="Le num�ro de liasse est obligatoire\n";
		}
		else {
			if( isNaN(numero) ){
				ListeErreurs+="Le num�ro de liasse doit �tre num�rique\n";
			}
		}
	}
	if ( depose_ad )   {
		if (dept_depose_ad=="")   {
			ListeErreurs+="Le d�partement doit �tre renseign� pour une liasse d�pos�e aux AD\n";
		}
	}
	else	{
		if (dept_depose_ad!="")   {
			ListeErreurs+="Le d�partement ne doit �tre renseign� que pour une liasse d�pos�e aux AD\n";
		}
	}
	if (ListeErreurs!= "")   {
		alert(ListeErreurs);
	}
	else   {
		document.forms[Formulaire].submit();
	}
}

function VerifieChampsNotaire(Formulaire){
	var nom = document.forms[Formulaire].nom.value;
	var selectElmt = document.getElementById('idf_commune');
	var idf_commune = selectElmt.options[selectElmt.selectedIndex].value;
	var ListeErreurs	= "";
	if ( nom == "" )   {
		ListeErreurs+="Saisir au moins le nom du notaire\n";
	}
	/*if ( idf_commune == 0 )   {
		ListeErreurs+="La commune de rattachement de l'�tude doit �tre renseign�e\n";
		}*/
	if (ListeErreurs!= "")   {
		alert(ListeErreurs);
	}
	else   {
		document.forms[Formulaire].submit();
	}
}

function VerifieSuppressionNotaires(Formulaire,IdfElement)
{
  var chaine="";
  // Un seul �l�ment
	if (document.forms[Formulaire].elements[IdfElement].checked)	{
		 chaine+=document.forms[Formulaire].elements[IdfElement].id;
	}
	// Au moins deux �l�ments 
  for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)  {
      if (document.forms[Formulaire].elements[IdfElement][i].checked)      {
         chaine+=document.forms[Formulaire].elements[IdfElement][i].id+"\n";
      }
  }
  if (chaine=="")  {
     alert("Pas de notaire s�lectionn�");
  }
  else  {
   	 Message="Etes-vous s�r de supprimer ces notaires :\n"+chaine+"?";
   	 if (confirm(Message))        {                                                                                                                                    
        document.forms[Formulaire].submit();                                                           
     }
  }
}

function VerifieChampsPeriode(Formulaire){
	var annee_debut = document.forms[Formulaire].annee_debut.value;
	var selectElmt = document.getElementById('mois_debut');
	var mois_debut = selectElmt.options[selectElmt.selectedIndex].text;
	var annee_fin = document.forms[Formulaire].annee_fin.value;
	var selectElmt = document.getElementById('mois_fin');
	var mois_fin = selectElmt.options[selectElmt.selectedIndex].text;
	var ListeErreurs	= "";
	if ( annee_debut == "" )   {
		ListeErreurs+="Saisir au moins l'ann�e de d�but de la p�riode\n";
	}
	if( isNaN(annee_debut) && annee_debut.substring(0,3) != 'an ' ) {
		ListeErreurs+="L'ann�e de d�but de la p�riode doit �tre soit une ann�e r�volutionaire (an I, an II, ...), soit une ann�e sur 4 chiffres\n";
	}
	else if( annee_debut.substring(0,3) == 'an ' && annee_debut != 'an I' && annee_debut != 'an II' && 
	         annee_debut != 'an III' && annee_debut != 'an IV' && annee_debut != 'an V' && annee_debut != 'an VI' &&
			 annee_debut != 'an VII' && annee_debut != 'an VIII' && annee_debut != 'an IX' && annee_debut != 'an X' &&
			 annee_debut != 'an XI' && annee_debut != 'an XII' && annee_debut != 'an XIII' && annee_debut != 'an XIV' ) {
		ListeErreurs+="L'ann�e de d�but de la p�riode doit �tre soit une ann�e r�volutionaire (an I, an II, ...), soit une ann�e sur 4 chiffres\n";
	}
	else {
		var a = annee_debut * 1;
		if( a < 1000 || a > 2100 ) {
			ListeErreurs+="L'ann�e de d�but de la p�riode doit �tre soit une ann�e r�volutionaire (an I, an II, ...), soit une ann�e sur 4 chiffres\n";
		}
	}
	if ( mois_debut != "" )   {
		if( annee_debut.substring(0,3) != 'an ' ) {
			if( isNaN(mois_debut ) ){
				ListeErreurs+="Incoh�rence entre l'ann�e et le mois de d�but\n";
			}
		}
		else {
			if( ! isNaN(mois_debut ) ){
				ListeErreurs+="Incoh�rence entre l'ann�e et le mois de d�but\n";
			}
		}
	}
	if ( annee_fin == '' )   {
		if( mois_fin != '' ) {
			ListeErreurs+="Le mois de fin ne doit �tre renseign� que si l'ann�e de fin est renseign�e\n";
		}
	}
	else {
		if( isNaN(annee_fin) && annee_fin.substring(0,3) != 'an ' ) {
			ListeErreurs+="L'ann�e de fin de la p�riode doit �tre soit une ann�e r�volutionaire (an I, an II, ...), soit une ann�e sur 4 chiffres\n";
		}
		else if( annee_fin.substring(0,3) == 'an ' && annee_fin != 'an I' && annee_fin != 'an II' && 
				annee_fin != 'an III' && annee_fin != 'an IV' && annee_fin != 'an V' && annee_fin != 'an VI' &&
				annee_fin != 'an VII' && annee_fin != 'an VIII' && annee_fin != 'an IX' && annee_fin != 'an X' &&
				annee_fin != 'an XI' && annee_fin != 'an XII' && annee_fin != 'an XIII' && annee_fin != 'an XIV' ) {
			ListeErreurs+="L'ann�e de fin de la p�riode doit �tre soit une ann�e r�volutionaire (an I, an II, ...), soit une ann�e sur 4 chiffres\n";
		}
		else {
			var a = annee_fin * 1;
			if( a < 1000 || a > 2100 ) {
				ListeErreurs+="L'ann�e de fin de la p�riode doit �tre soit une ann�e r�volutionaire (an I, an II, ...), soit une ann�e sur 4 chiffres\n";
			}
		}
		if ( mois_fin != "" )   {
			if( annee_fin.substring(0,3) != 'an ' ) {
				if( isNaN(mois_fin ) ){
					ListeErreurs+="Incoh�rence entre l'ann�e et le mois de fin\n";
				}
			}
			else {
				if( ! isNaN(mois_fin ) ){
					ListeErreurs+="Incoh�rence entre l'ann�e et le mois de fin\n";
				}
			}
		}
	}
	if (ListeErreurs!= "")   {
		alert(ListeErreurs);
	}
	else   {
		document.forms[Formulaire].submit();
	}
}

function VerifieSuppressionPeriodes(Formulaire,IdfElement)
{
  var chaine="";
  // Un seul �l�ment
	if (document.forms[Formulaire].elements[IdfElement].checked)	{
		 chaine+=document.forms[Formulaire].elements[IdfElement].id;
	}
	// Au moins deux �l�ments 
  for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)  {
      if (document.forms[Formulaire].elements[IdfElement][i].checked)      {
         chaine+=document.forms[Formulaire].elements[IdfElement][i].id+"\n";
      }
  }
  if (chaine=="")  {
     alert("Pas de p�riode s�lectionn�e");
  }
  else  {
   	 Message="Etes-vous s�r de supprimer ces p�riodes :\n"+chaine+"?";
   	 if (confirm(Message))        {                                                                                                                                    
        document.forms[Formulaire].submit();                                                           
     }
  }
}
