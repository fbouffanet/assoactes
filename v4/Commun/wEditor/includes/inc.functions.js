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

// BROWSER DETECTION -->
var userAgent = navigator.userAgent.toLowerCase();
var isMSIE    = (userAgent.indexOf('msie') != -1);
var isOpera   = (userAgent.indexOf('opera') != -1);
var isSafari  = ((userAgent.indexOf('applewebkit') != -1) || (navigator.vendor == "Apple Computer, Inc."));
var isIE      = ((userAgent.indexOf('msie') != -1) && (!isOpera) && (!isSafari));
var isIE4     = ((isIE) && (userAgent.indexOf("msie 4.") != -1));
var isGecko   = ((userAgent.indexOf('gecko') != -1) && (!isOpera) && (!isSafari));
var isNS      = ((userAgent.indexOf('compatible') == -1) && (isGecko) && (!isOpera) && (!isSafari));
var isNS4     = ((isNS) && (parseInt(navigator.appVersion) == 4));

// OBJECT FUNCTIONS -->
function getObject(idObject)
{
  if(document.getElementById) qObject = document.getElementById(idObject);
  else if(document.all)       qObject = document.all[idObject];
  else if(document.layers)    qObject = document.layers[idObject];
  else                        qObject = false;
  
  return qObject;
}

function objectExists(idObject)
{
  return getObject(idObject)?true:false;
}

function getInnerText(idObject)
{
  if(typeof(idObject) == "string") idObject = getObject(idObject);
  
  if(idObject.innerText) qText = idObject.innerText;
  else                   qText = idObject.innerHTML.replace(/<[^<]*>/gi, "");
  
  return qText;
}

function getOffsetTop(idObject)
{
  if(typeof(idObject) == "string") idObject = getObject(idObject);
  
  objOffsetParent = idObject.offsetParent;
  objOffsetTop    = idObject.offsetTop;
  while(objOffsetParent)
  {
    objOffsetTop    += objOffsetParent.offsetTop;
    objOffsetParent  = objOffsetParent.offsetParent;
  }
  return objOffsetTop;
}

function getOffsetLeft(idObject)
{
  if(typeof(idObject) == "string") idObject = getObject(idObject);
  
  objOffsetParent = idObject.offsetParent;
  objOffsetLeft   = idObject.offsetLeft;
  while(objOffsetParent)
  {
    objOffsetLeft   += objOffsetParent.offsetLeft;
    objOffsetParent  = objOffsetParent.offsetParent;
  }
  return objOffsetLeft;
}

// STYLE FUNCTIONS -->
function getStyle(idObject, sProperty, returnInteger)
{
  returnInteger = returnInteger || false;
  
  if(typeof(idObject) == "string") idObject = getObject(idObject);
  
  if(idObject.currentStyle)
	{
    sStyle = eval("idObject.currentStyle." + sProperty);
  }
  else if(document.defaultView.getComputedStyle)
	{
    sStyle = document.defaultView.getComputedStyle(idObject, null).getPropertyValue(sProperty);
  }
  else sStyle = eval("idObject.style." + sProperty);
  
	return sStyle.match(/px$/i)?(returnInteger?parseInt(sStyle.replace(/[^0-9]/gi, "")):sStyle):sStyle;
}

function setStyle(idObject, sProperty, sValue)
{
  if(typeof(idObject) == "string") idObject = getObject(idObject);
  
  eval("idObject.style." + sProperty + " = \"" + sValue + "\";");
  
	return false;
}

// EVENT FUNCTIONS -->
function setEvent(idObject, eventType, eventFunction)
{
  if(typeof(idObject) == "string") idObject = getObject(idObject);
  
  if(document.addEventListener)            idObject.addEventListener(eventType, eventFunction, false);
  else if(document.layers || document.all) idObject.attachEvent("on" + eventType, eventFunction);
  else                                     eval("idObject.on" + eventType + " = " + eventFunction + ";");
  
  return false;
}

function setObjectEvent(wObject, oEvent, oFunction, oTimer)
{
  var oTimer = oTimer || 0;

  if(typeof(oEvent) == "object")
  {
    for(i in oEvent) setEvent(wObject, oEvent[i], function() { setTimeout(oFunction, oTimer); });
  }
  else setEvent(wObject, oEvent, function() { setTimeout(oFunction, oTimer); });
}

// VARIOUS PROTOTYPES -->
String.prototype.isEmpty = function() // Check if STRING is empty
{
  gText = this.replace(/\n|\r|\t/gi, "");
  
  return gText == ""?true:false;
}

// FUNCTIONS -->
function setUnselectable(cObject)
{
  if(typeof(cObject.tagName) != "undefined")
  {
  	// Set current object children unselectable
    if(cObject.hasChildNodes())
  	{
  		for(i = 0; i < cObject.childNodes.length; i++)
  		{
  			setUnselectable(cObject.childNodes[i]);
  		}
  	}

  	// Set current object unselectable
  	cObject.unselectable = true;
  }
}

function preventDefault(e)
{
  if(isMSIE) return false;
  else e.preventDefault();
}

function disableContextMenu(e)
{
  if(isMSIE) return false;
  else e.stopPropagation();
}

function getMousePosition(e)
{
	x = isGecko?e.pageX:e.x;
	y = isGecko?e.pageY:e.y;

	mousePosition = Array(x, y);
}

function getKeyCodes(e)
{
  if(!e) e = window.event;

  // Set events array
  for(eItem in e) keyCodes[eItem] = e[eItem];
}

function setButtonOver()
{
  commandName = getCommandName(this.id);
  
  if(enabledCommands[commandName] || !isCompatible) this.className = "menuItem_hover";

  // Status bar message
  if(typeof(altCommands[commandName]) != "undefined" && typeof(altCommands[commandName][1]) != "undefined")
  {
    clearTimeout(statusTimeout);
    statusTimeout = setTimeout("setStatusText(\"" + getParentName(this.id) + "\", \"" + altCommands[commandName][1] + "\");", 200);
  }
}

function setButtonOut()
{
  commandName = getCommandName(this.id);
  
  if(controlStates[this.id])             this.className = "menuItem_selected";
  else if(panelStates[this.id])          this.className = "menuItem_hover";
  else if(!enabledCommands[commandName]) this.className = "menuItem_disabled";
  else                                   this.className = "menuItem";

  // Status bar message
  if(typeof(altCommands[commandName]) != "undefined")
  {
    clearTimeout(statusTimeout);
    statusTimeout = setTimeout("setStatusText(\"" + getParentName(this.id) + "\");", 200);
  }
}

function setStatusText(objectId, sText)
{
  getObject(objectId + "_wStatusText").innerHTML = sText?sText:globalMessages['defaultStatusMessage'];
}

function updateCurrentColor(objectId, colorValue) // Update current color display
{
  // Convert IE color into RGB attribute
  if(typeof(colorValue) == "number")
  {
  	colorValue = "rgb(" + (colorValue & 0xFF) + ", " + ((colorValue >> 8) & 0xFF) + ", " + ((colorValue >> 16) & 0xFF) + ")";
  }

  // Convert RGB attribute into hexadecimel attribute
  if(colorValue.match(/^rgb/))
  {
    colorValues = colorValue.replace(/[^0-9\,]*/gi, "").split(",");
    colorValue  = "#";

    for(i in colorValues) colorValue += dechex(colorValues[i]);
  }

  if(typeof(colorValue) != "undefined" && colorValue != "" && colorValue != null)
  {
    setStyle(objectId + "_currentColor", "backgroundColor", colorValue);
    getObject(objectId + "_colorName").innerHTML = colorOptions[colorValue];
  }
}

function updateCurrentSize(objectId, sizeValue) // Update current size display
{
  if(typeof(sizeValue) == "undefined" || sizeValue == "" || sizeValue == null) sizeValue = editorFontSize;
  getObject(objectId + "_sizeName").innerHTML = sizeValue + " - " + sizeOptions[sizeValue];
}

function dechex(nValue) // Decimal => Hexadecimal
{
  nValue1 = Math.floor(nValue/16);
  nValue2 = nValue - nValue1 * 16;

  return hexValues[nValue1] + hexValues[nValue2];
}

function getParentName(objectId)
{
  return objectId.replace(/^(.+)_([^_\-]+)(\-([^_]+))?/i, "$1");
}

function getCommandName(objectId)
{  
  if(objectId.match(/_panel/i))
  {
    objectId = objectId.replace(/^(.+)_panel([^\-]+)(.+)?/i, "$2");
  }
  else objectId = objectId.replace(/^(.+)_([^_\-]+)\-([^_]+)/i, "$3");
  
  return objectId;
}
