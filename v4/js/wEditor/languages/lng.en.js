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
var translationLangCode = "en";
var translationLangName = "English";
var translationAuthors  = "Vincent BATOUFFLET";
var translationVersion  = "0.3 (20050801)";

var globalMessages = new Array();
var globalMessages = {
  "currentColor"         : "Current color",
  "currentSize"          : "Current size",
  "defaultStatusMessage" : "Ready",
  "endInitMessage"       : "Ready (initialization carried in %TIME%s)",
  "functionShortcut"     : " (CTRL+ALT+%CHARCODE%)",
  "aboutMessage"         : "<strong>Renoa wEditor :</strong> " + editorVersion + " [" + translationLangName + "] - Homepage : <a href=\"" + editorWebsite + "\" target=\"_blank\">" + editorWebsite + "</a>."
};

var promptMessages = new Array();
var promptMessages = {
  "enterURL"      : "Please, specify a link :",
  "enterImageURL" : "Please, specify the image link :\n\n",
  "removeFormat"  : "Do you really want to remove current selection formatting ?"
};

var warningMessages = new Array();
var warningMessages = {
  "missingArguments" : "You must specify an instance name for the new object\nand a valid field name for HTML code destination !",
  "notSupported"     : "This command doesn't seems to be supported by your browser !",
  "noSelection"      : "Your browser require that text was selected before using this command !",
  "notFocused"       : "You must select a location to insert markups !",
  "noWysiwygSupport" : "WYSIWYG functions don't seems to be supported by your browser !"
};

/*
// COMMANDS DESCRIPTIONS AND ALT/TITLE ATTRIBUTES
// Example :
//
// "command_name" : Array("alt_attribute", "status_text"),
*/


var altCommands = new Array();
var altCommands = {
  "RemoveFormat"        : Array("Remove formatting", "Remove current selection formatting", 82),
  "SelectAll"           : Array("Select all"       , "Select all contents (CTRL+A)"),
	"Copy"                : Array("Copy"             , "Copy current selection to clipboard (CTRL+C)"),
	"Cut"                 : Array("Cut"              , "Cut current selection to clipboard (CTRL+X)"),
	"Paste"               : Array("Paste"            , "Paste clipboard content (CTRL+V)"),
	"Undo"                : Array("Undo"             , "Undo last action (CTRL+Z)"),
	"Redo"                : Array("Redo"             , "Redo last undone action (CTRL+Y)"),
	"Bold"                : Array("Bold"             , "Put current selection in bold", 66),
	"Italic"              : Array("Italic"           , "Put current selection in italic", 73),
	"Underline"           : Array("Underline"        , "Underline current selection", 85),
	"StrikeThrough"       : Array("Strike through"   , "Strike through current selection", 83),
	"Superscript"         : Array("Superscript"      , "Superscript current selection"),
	"Subscript"           : Array("Subscript"        , "Subscript current selection"),
	"ForeColor"           : Array("Font color"       , "Set font color"),
	"FontSize"            : Array("Font size"        , "Set font size"),
	"JustifyLeft"         : Array("Left"             , "Justify left"),
	"JustifyCenter"       : Array("Center"           , "Justify center"),
	"JustifyRight"        : Array("Right"            , "Justify right"),
	"JustifyFull"         : Array("Justify"          , "Justify current selection"),
	"Indent"              : Array("Indent"           , "Indent block"),
	"Outdent"             : Array("UnIndent"         , "UnIndent block"),
	"InsertOrderedList"   : Array("Ordered list"     , "Insert/Remove ordered list"),
  "InsertUnorderedList" : Array("Unordered list"   , "Insert/Remove unordered list"),
	"CreateLink"          : Array("Add link"         , "Add an hypertext link"),
	"Unlink"              : Array("Remove link"      , "Remove hypertext link"),
	"InsertImage"         : Array("Insert image"     , "Insert a new image"),
	"AddMarkups"          : Array("Special markups"  , "Insert special markups"),
	"AboutEditor"         : Array("Information"      , "Show information about this editor")
};
