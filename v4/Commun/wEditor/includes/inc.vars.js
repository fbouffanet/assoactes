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

// Set global variables
var wEditorInstances = new Array();
var keyCodes         = new Array();
var mousePosition    = new Array();
var enabledCommands  = new Array();
var statusTimeout;

// Test if WYSIWYG is supported
var isCompatible = typeof(document.designMode) != "undefined"?true:false;

// Controls and panels states
var panelStates   = new Array();
var controlStates = new Array();

var controlStatus = new Array();
var controlStatus = {
	"Bold"                : false,
	"Italic"              : false,
	"Underline"           : false,
	"StrikeThrough"       : false,
	"Superscript"         : false,
	"Subscript"           : false,
	"JustifyLeft"         : false,
	"JustifyCenter"       : false,
	"JustifyRight"        : false,
	"JustifyFull"         : false,
	"InsertOrderedList"   : false,
	"InsertUnorderedList" : false
};

// Options panels
var sizeOptions = new Array();
var sizeOptions = {
  1 : "10px",
  2 : "12px",
  3 : "16px",
  4 : "18px",
  5 : "24px",
  6 : "32px",
  7 : "48px"
};

var colorOptions = new Array();
var colorOptions = {
  "#000000" : "Black",
	"#a0522d" : "Sienna",
	"#556b2f" : "DarkOliveGreen",
	"#006400" : "DarkGreen",
	"#483d8b" : "DarkSlateBlue",
	"#000080" : "Navy",
	"#4b0082" : "Indigo",
	"#2f4f4f" : "DarkSlateGray",
	"#8b0000" : "DarkRed",
	"#ff8c00" : "DarkOrange",
	"#808000" : "Olive",
	"#008000" : "Green",
	"#008080" : "Teal",
	"#0000ff" : "Blue",
	"#708090" : "SlateGray",
	"#696969" : "DimGray",
	"#ff0000" : "Red",
	"#f4a460" : "SandyBrown",
	"#9acd32" : "YellowGreen",
	"#2e8b57" : "SeaGreen",
	"#48d1cc" : "MediumTurquoise",
	"#4169e1" : "RoyalBlue",
	"#800080" : "Purple",
	"#808080" : "Gray",
	"#ff00ff" : "Magenta",
	"#ffa500" : "Orange",
	"#ffff00" : "Yellow",
	"#00ff00" : "Lime",
	"#00ffff" : "Cyan",
	"#00bfff" : "DeepSkyBlue",
	"#9932cc" : "DarkOrchid",
	"#c0c0c0" : "Silver",
	"#ffc0cb" : "Pink",
	"#f5deb3" : "Wheat",
	"#fffacd" : "LemonChiffon",
	"#98fb98" : "PaleGreen",
	"#afeeee" : "PaleTurquoise",
	"#add8e6" : "LightBlue",
	"#dda0dd" : "Plum",
	"#ffffff" : "White"
};

var hexValues = new Array();
var hexValues = {
  0  : "0",
  1  : "1",
  2  : "2",
  3  : "3",
  4  : "4",
  5  : "5",
  6  : "6",
  7  : "7",
  8  : "8",
  9  : "9",
  10 : "a",
  11 : "b",
  12 : "c",
  13 : "d",
  14 : "e",
  15 : "f"
};
