<?php

// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

/*
* Renvoie une chaine encodée en cp1252 en UTF8
* @param string $st_valeur chaine cp1252 à convertir
* @return string chaine encodée en UTF8
*/
function cp1252_vers_utf8($st_valeur)
{
	return mb_convert_encoding($st_valeur,'UTF8','cp1252');
}

/*
* Renvoie une chaine encodée en UTF8 en cp1252
* @param string $st_valeur chaine UTF8 à convertir
* @return string chaine encodée en UTF8
*/
function utf8_vers_cp1252($st_valeur)
{
	return mb_convert_encoding($st_valeur,'cp1252','UTF8');
}

?>