/*
// Copyright (C) 2005  Vincent BATOUFFLET (SantX - santx@free.fr)
//
// This file is a part of Renoa Editor
//
// Renoa Editor is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
//
*/

/////////////////////////////////////////
// Language file - Renoa Editor        //
/////////////////////////////////////////

// Translation information
var translationLangCode = "fr";
var translationLangName = "Fran�ais";
var translationAuthors  = "V. BATOUFFLET";
var translationVersion  = "0.3 (20050801)";

var globalMessages = new Array();
var globalMessages = {
  "currentColor"         : "Couleur actuelle",
  "currentSize"          : "Taille actuelle",
  "defaultStatusMessage" : "Pr�t",
  "endInitMessage"       : "Pr�t (initialisation effectu�e en %TIME%s)",
  "functionShortcut"     : " (CTRL+ALT+%CHARCODE%)",
  "aboutMessage"         : "<strong>Renoa wEditor :</strong> " + editorVersion + " [" + translationLangName + "] - Site web : <a href=\"" + editorWebsite + "\" target=\"_blank\">" + editorWebsite + "</a>."
};

var promptMessages = new Array();
var promptMessages = {
  "enterURL"      : "Veuillez sp�cifier un lien :",
  "enterImageURL" : "Veuillez sp�cifier l'adresse de l'image :\n\n",
  "removeFormat"  : "D�sirez-vous r�ellement supprimer la mise en forme du texte s�lectionn� ?"
};

var warningMessages = new Array();
var warningMessages = {
  "missingArguments" : "Vous devez sp�cifier un nom pour le nouvel objet ainsi que\nle nom d'un champ valide pour la destination du code HTML !",
  "notSupported"     : "Cette commande ne semble pas �tre support�e par votre navigateur !",
  "noSelection"      : "Votre navigateur requiert que du texte soit pr�alablement s�lectionn� !",
  "notFocused"       : "Veuillez tout d'abord choisir un emplacement pour l'insertion des balises !",
  "noWysiwygSupport" : "Votre navigateur ne semble pas supporter les fonctions WYSIWYG !"
};

/*
// COMMANDS DESCRIPTIONS AND ALT/TITLE ATTRIBUTES
// Example :
//
// "command_name" : Array("alt_attribute", "status_text"),
*/


var altCommands = new Array();
var altCommands = {
	"RemoveFormat"        : Array("Supprimer mise en forme", "Supprimer la mise en forme du texte s�lectionn�", 82),
	"SelectAll"           : Array("S�lectionner tout"      , "S�lectionner tout le contenu (CTRL+A)"),
  "Copy"                : Array("Copier"                 , "Copier le texte s�lectionn� (CTRL+C)"),
	"Cut"                 : Array("Couper"                 , "Couper le texte s�lectionn� (CTRL+X)"),
	"Paste"               : Array("Coller"                 , "Coller le contenu du presse-papier (CTRL+V)"),
	"Undo"                : Array("Annuler"                , "Annuler la derni�re action (CTRL+Z)"),
	"Redo"                : Array("R�tablir"               , "R�tablir l'action pr�c�demment annul�e (CTRL+Y)"),
	"Bold"                : Array("Gras"                   , "Mettre le texte en gras", 71),
	"Italic"              : Array("Italique"               , "Mettre le texte en italique", 73),
	"Underline"           : Array("Souligner"              , "Souligner le texte", 83),
	"StrikeThrough"       : Array("Barrer"                 , "Barrer le texte", 66),
	"Superscript"         : Array("Exposant"               , "Mettre ou non le texte en exposant"),
	"Subscript"           : Array("Indice"                 , "Mettre ou non le texte en indice"),
	"ForeColor"           : Array("Couleur texte"          , "D�finir la couleur du texte"),
	"FontSize"            : Array("Taille texte"           , "D�finir la taille du texte"),
	"JustifyLeft"         : Array("Gauche"                 , "Aligner le texte � gauche"),
	"JustifyCenter"       : Array("Centrer"                , "Aligner le texte au centre"),
	"JustifyRight"        : Array("Droite"                 , "Aligner le texte � droite"),
	"JustifyFull"         : Array("Justifier"              , "Justifier le texte"),
	"Indent"              : Array("Augementer retrait"     , "Augmenter d'un retrait"),
	"Outdent"             : Array("Diminuer retrait"       , "Diminuer d'un retrait"),
	"InsertOrderedList"   : Array("Liste num�rot�e"        , "Ins�rer/Enlever une liste num�rot�e"),
  "InsertUnorderedList" : Array("Liste � puces"          , "Ins�rer/Enlever une liste � puces"),
	"CreateLink"          : Array("Ajouter lien"           , "Ajouter un lien hypertexte"),
	"Unlink"              : Array("Supprimer lien"         , "Supprimer le lien hypertexte"),
	"InsertImage"         : Array("Ins�rer image"          , "Ins�rer une image"),
	"AddMarkups"          : Array("Balises personnalis�es" , "Ins�rer une balise personnalis�e"),
	"AboutEditor"         : Array("Informations"           , "Afficher les informations sur l'�diteur")
};
