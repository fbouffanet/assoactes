/*
// Copyright (C) 2005  Vincent BATOUFFLET (SantX - santaurus@gmail.com)
//
// This file is a part of Renoa wEditor
//
// Renoa wEditor is free software; you can redistribute it and/or
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

// MAIN VARIABLES ->
var editorWebsite  = "http://santx.free.fr";
var editorVersion  = "0.2.9b (20050803)";

// FBO
var editorAbsoluteUri     = "http://adherents.genea16.net/Commun/wEditor/";
var editorDefaultLanguage = "fr";      // Default language
var editorDefaultWidth    = "550px";   // Default editor's width
var editorDefaultHeight   = "250px";   // Default editor's height
var editorButtonWidth     = "16px";    // Menu buttons' width
var editorButtonHeight    = "16px";    // Menu buttons' height
var editorFontSize        = 2;         // See 'colorOptions' in 'inc.vars.js'
var editorFontColor       = "#000000"; // Default font color
var perLineItem           = 8;         // Color items displayed per line

var imgPrefix    = "editor_"; // Prefix in image files
var imgExtension = "gif";     // Image type extension

// Various directories
var imageDir    = editorAbsoluteUri + "images/";
var languageDir = editorAbsoluteUri + "languages/";
var includeDir  = editorAbsoluteUri + "includes/";
var configDir   = editorAbsoluteUri + "config/";

// Load CSS Stylesheet
document.write("<link href=\"" + includeDir + "inc.main.css\" rel=\"stylesheet\" type=\"text/css\" />");

// MAIN FUNCTIONS -->
function addScript(scriptUri)
{
  document.write("<script language=\"javascript\" type=\"text/javascript\" src=\"" + scriptUri + "\"></script>");
}

function validatePost()
{
  for(i in wEditorInstances)
  {
    getObject(wEditorInstances[i]).value = isCompatible?getObject(i).contentWindow.document.body.innerHTML:getObject(i).value;
  }
}

// LOAD SCRIPT FILES ->
var scripts = new Array(
  includeDir  + "inc.functions.js",
  includeDir  + "inc.vars.js",
  includeDir  + "inc.init.js",
  includeDir  + "inc.main.js",
  configDir   + "cfg.menu.js",
  configDir   + "cfg.markups.js",
  languageDir + "lng." + editorDefaultLanguage + ".js"
);

// Load all specified script files
for(i in scripts)
{
  addScript(scripts[i]);
}
