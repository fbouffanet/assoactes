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

// COMMANDS VARIABLES ->
var menuCommands = new Array();
var idx = 0;

/*
// -SEP- : display a separator
// -CR-  : start a new line
*/

idx++; menuCommands[idx] = "RemoveFormat";
idx++; menuCommands[idx] = "-SEP-";
idx++; menuCommands[idx] = "Copy";
idx++; menuCommands[idx] = "Cut";
idx++; menuCommands[idx] = "Paste";
idx++; menuCommands[idx] = "-SEP-";
idx++; menuCommands[idx] = "Undo";
idx++; menuCommands[idx] = "Redo";
idx++; menuCommands[idx] = "-SEP-";
idx++; menuCommands[idx] = "Bold";
idx++; menuCommands[idx] = "Italic";
idx++; menuCommands[idx] = "Underline";
idx++; menuCommands[idx] = "StrikeThrough";
idx++; menuCommands[idx] = "Superscript";
idx++; menuCommands[idx] = "Subscript";
idx++; menuCommands[idx] = "-SEP-";
idx++; menuCommands[idx] = "ForeColor";
idx++; menuCommands[idx] = "FontSize";
idx++; menuCommands[idx] = "-SEP-";
idx++; menuCommands[idx] = "JustifyLeft";
idx++; menuCommands[idx] = "JustifyCenter";
idx++; menuCommands[idx] = "JustifyRight";
idx++; menuCommands[idx] = "JustifyFull";
idx++; menuCommands[idx] = "Indent";
idx++; menuCommands[idx] = "Outdent";
idx++; menuCommands[idx] = "-SEP-";
idx++; menuCommands[idx] = "InsertOrderedList";
idx++; menuCommands[idx] = "InsertUnorderedList";
idx++; menuCommands[idx] = "-CR-";
idx++; menuCommands[idx] = "CreateLink";
idx++; menuCommands[idx] = "Unlink";
idx++; menuCommands[idx] = "InsertImage";
idx++; menuCommands[idx] = "AddMarkups";
idx++; menuCommands[idx] = "-SEP-";
idx++; menuCommands[idx] = "AboutEditor";

var contextCommands = new Array();
var idx = 0;

idx++; contextCommands[idx] = "Undo";
idx++; contextCommands[idx] = "Redo";
idx++; contextCommands[idx] = "-SEP-";
idx++; contextCommands[idx] = "Copy";
idx++; contextCommands[idx] = "Cut";
idx++; contextCommands[idx] = "Paste";
