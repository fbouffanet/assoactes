<?php
// Interface PHP pour Généabank; Copyright 2006; Jean-Pierre Bach (Généalogie en Pays de Tulle). jeanpierre.bach@wanadoo.fr
// V1.0 du 6/08/2006

/*
 * Version spéciale de session_start(), à utiliser au tout début
 *   de l'exécution de la page PHP qui doit afficher les actes.
 * Comme session_start(), cette fonction DOIT être appelée
 *   *avant* l'envoi du "BODY" de la page html.
 *
 * Si on était certain que le navigateur client supportait les "cookies",
 *   Il suffirait d'appeler session_start() "standard".
 *   ou de demander à PHP de fonctionner dans un mode de session automatique.
 *
 * Mais comme on ne sait pas trop comment se comporterait le navigateur, 
 *  la fonction ci-dessous a pour objectif de récupérer l'identifiant de
 *  session dans le message émis par Généabank, dans l'hypothèse ou
 *  le cookie "standard" PHPSESSID ne serait pas défini.
 *
 * Cette fonction est donc adaptée à des Apache /PHP en configuration "standard".
 * Ce code pourrait (devrait?) être retouché en cas de codification différente
 *   du nom du cookie ou du code de session.
 */

function Gbk_session_start() { 
	
	global $SessionValide;

	$SessionValide = false;
	
	if (isset ($_COOKIE['PHPSESSID'])) {
		// Tout va bien, il suffit de faire un "session_start" pour récupérer la session
		session_id($_COOKIE['PHPSESSID']);
		session_start();
		$SessionValide = 1;
		}
	else {
		if ((isset ($_GET['key'])) && (isset ($_GET['auth']))) {
			$key = $_GET['key'];
			$l = strlen($key);  // Je m'adapte à des formats de sessions différents. Le MD5 doit être sur 32 chars
			$sid = substr($key, 0, $l - 32);
			session_id($sid);
			session_start();
			$SessionValide = 2;
			}
		}

	}
// Fin de fonction BGbk_session_start()

function GeneaBank ($amount, $assoc, $str2Display,$myUrl)  {

//echo "<p>Debug: Tentative d'activation d'un échange Genebank.</p>";

	// paramètres statiques (peuvent être inclus à partir d'un include séparé, comme dans:
	//    include('localGbkParams.inc');
	$gbkUrl = 'http://www.geneabank.org/cgi-bin/transaction';
	

	/* Séquence paranoïde : 
	 * Je range dans le contexte de session l'Id de la session elle-même.
	 * Ce bidouillou apporte une redondance qui servira à me conforter
	 *  dans l'idée que la demande d'affichage en retour provient bien de Gbk
	 */
	$session = session_id();  
	$_SESSION['Gbk_Sid'] = $session;   // Cette auto référence est vraiment de la paranoïa... M'enfin
	
	/* Je sauve dans l'environnement de session tout ce qui pourra
	 *	me servir à vérifier le jeton et afficher l'acte en retour
	 */
	$_SESSION['Gbk_Amount'] = $amount;
	$_SESSION['Gbk_Str']    = $str2Display;
	
	/* Je calcule une clé qui est diffrente du (seul) sid pour éviter de rejouer une requête
	 *  qui aurait seulement le même nombre de points
	 */
	$key = $session . md5($session.$str2Display);
	if ($amount > 1) { $pluriel ='s'; } 
	else               { $pluriel ='';  }

	return "<FORM method=\"get\" action=\"$gbkUrl\" >
 		<input type='hidden' name='url' value='$myUrl'>
		<input type='hidden' name='key' value='$key'>
		<input type='hidden' name='to' value='$assoc'>
		<input type='hidden' name='amount' value='$amount'>
		<input_type='hidden' name='language' value='fr'>
		<input type='submit' value=\"Cliquer ici pour transférer $amount point$pluriel à l'Association Généalogique de la Charente\">
	</FORM>";
	
}
// fin de fonction Geneabank


function verifJetonGBK() { 
	
	/*
	 * On a besoin de connître les mots de passe des associations reconnues
	 *  Ceci peut être fait dans un fichier séparé comme 
	 *   include('localGbkParams.inc');
	 * Le principe est d'initialiser une liste des mots de passe des associations
	 *   reconnues dans un tableau GbkPwd:
	 */
	$GbkPwd['agcharente']='pasouly4';
	/* ... */
	
	// On tente d'abord de récupérer la session à l'origine de cette demande
	if (isset($_GET['key'])) {
		$key = $_GET['key'];
		$l = strlen($key);
		//echo "<p>Debug Longueur de clé = $l</p>";
		$inpSession=substr($key, 0, $l - 32);  // Le MD5 doit occuper 32 caractères
		$session = session_id();
		//echo "<p>Debug session = $session</p>";
		//session_id($session);                     En principe, ceci a déjà été fait
		if (isset($_SESSION['Gbk_Sid'])) {
			$sessKid = $_SESSION['Gbk_Sid'];
			if (   ($session != $sessKid)
			    || ($session != $inpSession) ) {
				echo "<p><b>Erreur d'identification de session";
				/* Code parano Debug only
				 *
				echo "<br>session    = $session";
				echo "<br>sessKid    = $sessKid";
				echo '<br>inpSession = ' . htmlspecialchars($inpSession);
				 * Fin de code Debug
				 */
				echo "</b></p>";
				$_SESSION['Gbk_Sid']=''; // Tuer ce code pour êviter tout vol de session
				return false;
			}
		} else { 
			echo "<p><b>Erreur d'initialisation de session";
			/* Code parano Debug only
			 *
			echo "<br>session    = $session";
			echo "<br>sessKid    = $sessKid";
			echo '<br>inpSession = ' . htmlspecialchars($inpSession);
			 * Fin de code Debug
			 */
			echo "</b></p>";
			return false;
		}
	} else {
		echo "<p><b>Erreur: Clé manquante en retour</b></p>";
		$_SESSION['Gbk_Sid']=''; // Tuer ce code pour éviter tout vol de session
		return false;
	}
	
	/* ATTENTION: l'instruction  suivante est peut-être gênante, 
	 *   Dans la mesure où elle va interdire un réaffichage de la même
	 *   page par le bouton "actualiser" du navigateur.
	 * Il pourrait être judicieux de la *supprimer* (elle n'est pas fondamentale)
	 */
	//$_SESSION['Gbk_Sid']=''; // Tuer ce code, maintenant inutile, pour éviter tout vol de session (Supprimé par FP)

	
	if (isset($_SESSION['Gbk_Str'])) {
		$str = $_SESSION['Gbk_Str'];
	} else {
		echo "<p><b>Erreur d'initialisation (chaîne) de session</b></p>";
		return false;
	}
	
	$expected_key = $session . md5($session.$str);
	
	/* *
	   echo "<p>Debug:";
	   echo "<br>key=$key";
	   echo "<br>expd=$expected_key";
	   if ($key == $expected_key) { echo '<br><b><i>Good:</i></b>'; }
	   echo '</p>';
	 * */
	if ($key != $expected_key) {
		echo "<p><b>Erreur de validation de cle de session.</b></p>";
		return false;
		}
	
	/* On va récupérer ici les AUTRES paramètres de la requête,
	 *   Puis on vérifiera la signature du jeton, basée sur ces params
	 */

	if (isset($_GET['auth'])) {
		$auth = $_GET['auth'];   // On n'arrive ici qu'après avoir vérifié que l'item était défini
	} else {
		echo "<p><b>Erreur: non respect du protocole GeneBank (absence jeton)</b></p>";
		return false;
	}
	if (isset($_GET['ref'])) {
		$ref = $_GET['ref'];
		//echo '<p>Debug: ref = ' . htmlspecialchars($ref) . '</p>';
	} else {
		echo "<p><b>Erreur: non respect du protocole GeneBank (absence référence)</b></p>";
		return false;
	}
        if (isset($_GET['amount'])) {
		$amount=$_GET['amount'];
		//echo "<p>Debug amount = $amount</p>";
		if ($amount != $_SESSION['Gbk_Amount']) {
			echo '<p><b>Erreur: Le nb de points accordés ' 
	                     . htmlspecialchars($amount)
			     . "n'est pas celui demandé</b></p>";
			return false;
		}
	} else {
		echo "<p><b>Erreur: Nb de points accordés manquant.</b></p>";
		return false;
	}
	if (isset($_GET['to'])) {
		$to=$_GET['to'];
		//echo "<p>Debug to = $to</p>";
		if (!isset ($GbkPwd[$to])) {
			echo '<p><b>Erreur: ' . htmlspecialchars($to) . " = Id inconnu pour l'association </b></p>";
			return false;
		}
	} else {
		echo "<p><b>Erreur: Id association manquant.</b></p>";
		return false;
	}

	$passAsso=$GbkPwd[$to];
        //print ("PROVISOIRE = $passAsso<br>");
	$expected_auth = md5("$amount $to $key $ref $passAsso");
	/* *
	   echo "<p>Debug:";
	   print("<br>$amount $to $key $ref ");
	   echo "<br>auth=$auth";
	   echo "<br>expd=$expected_auth";
	   if ($auth == $expected_auth) { echo '<br><b><i>Good:</i></b>'; }
	   echo '</p>';
	* */

	if ($auth == $expected_auth) { return $str; }
	else {
		echo "<p><b>Erreur: l'autorisation d'affichage par Généabank est invalide.</b></p>";
		return false;
	}

} 
// Fin de function verifJetonGBK

?>