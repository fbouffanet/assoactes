<?php
require ('Geneabank.inc');

	Gbk_session_start();  // Session start  *SPECIAL*  OBLIGATOIRE * ; doit �tre fait avant tout autre chose

echo <<<EOT
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<title>$title</title>
<META HTTP-EQUIV="CONTENT-TYPE"
                                CONTENT="text/html; charset=ISO-8859-1">
<META NAME="COPYRIGHT" CONTENT="G�n�alogie en Pays de Tulle; 2006; Jean-Pierre Bach">
<META NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW">
</head>
<body>
EOT;
$str = verifJetonGbk();
if (! $str) { 
	echo "<p><b>D�sol�, mais je ne peux afficher les actes dans ce contexte.</b></p>";  
	}
else {
	echo $str;
	}
?>
</body>
</html>