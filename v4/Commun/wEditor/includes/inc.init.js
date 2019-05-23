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

// FUNCTIONS -->
var wEditor = function(objectName, htmlField, width, height)
{
  this._objectName = objectName || false;
  this._htmlField  = htmlField  || false;
  this._width      = width      || editorDefaultWidth;
  this._height     = height     || editorDefaultHeight;
}

wEditor.prototype.create = function()
{
  if(this._objectName && objectExists(this._htmlField))
  {
    // Saving instance
    wEditorInstances[this._objectName] = this._htmlField;

    // Prevent menu items selection
    if(isIE)         noSelection = " onselectstart=\"return false;\"";
    else if(isGecko) noSelection = " style=\"-moz-user-select: none;\"";
    else             noSelection = "";

    // Adding a new instance
    newEditor  = "<div id=\"" + this._objectName + "_wEditor\" style=\"width: " + this._width + ";\" class=\"wEditor\">\n";
    newEditor += "<div id=\"" + this._objectName + "_wMenu\"" + noSelection + " class=\"wMenu\">\n";
    
    if(isCompatible)
    {
      // Font color panel
      newEditor += "<span id=\"" + this._objectName + "_panelForeColor\" class=\"wContextMenu\">\n";
      newEditor += "<div title=\"" + globalMessages['currentColor'] + "\" class=\"menuTitle\">";
      newEditor += "<div id=\"" + this._objectName + "_currentColor\" style=\"background-color: " + editorFontColor + ";\" class=\"colorItem\">&nbsp;</div>";
      newEditor += "<span id=\"" + this._objectName + "_colorName\">" + colorOptions[editorFontColor] + "</span>";
      newEditor += "</div>\n";
      newEditor += "<div id=\"" + this._objectName + "_panelForeColor-content\" class=\"mContent\"></div>\n";
      newEditor += "</span>\n";
  
      // Font size panel
      newEditor += "<span id=\"" + this._objectName + "_panelFontSize\" class=\"wContextMenu\">\n";
      newEditor += "<div title=\"" + globalMessages['currentSize'] + "\" class=\"menuTitle\">";
      newEditor += "<span id=\"" + this._objectName + "_sizeName\">" + editorFontSize + " - " + sizeOptions[editorFontSize] + "</span>";
      newEditor += "</div>\n";
      newEditor += "<div id=\"" + this._objectName + "_panelFontSize-content\" class=\"mContent\"></div>\n";
      newEditor += "</span>\n";
  
      // Markups panel
      newEditor += "<span id=\"" + this._objectName + "_panelAddMarkups\" class=\"wContextMenu\">\n";
      newEditor += "<div id=\"" + this._objectName + "_panelAddMarkups-content\" class=\"mContent\"></div>\n";
      newEditor += "</span>\n";
    }
  
    newEditor += "</div>\n";
    
    if(isCompatible)
    {
      // Information panel
      newEditor += "<div id=\"" + this._objectName + "_wInfo\" class=\"wInfo\">&nbsp;</div>\n";
  
      // Context Menu
      newEditor += "<span id=\"" + this._objectName + "_wContextMenu\" class=\"wContextMenu\">";
      newEditor += "<div id=\"" + this._objectName + "_wContextMenu-content\" class=\"mContent\"></div>";
      newEditor += "</span>\n";
    }

    // iFrame or Textarea
    if(isCompatible)
    {
      newEditor += "<iframe id=\"" + this._objectName + "\" frameborder=\"0\" style=\"height: " + this._height + ";\" class=\"wFrame\"></iframe>\n";
    }
    else
    {
      newEditor += "<textarea id=\"" + this._objectName + "\" style=\"height: " + this._height + ";\" class=\"wFrame\"></textarea>\n";
    }

    // Status bar
    newEditor += "<div id=\"" + this._objectName + "_wStatus\"" + noSelection + " class=\"wStatus\">\n";
    newEditor += "<div id=\"" + this._objectName + "_wStatusText\" class=\"wStatusText\">&nbsp;</div>\n";
    newEditor += "</div>\n";
    newEditor += "</div>\n";

    document.write(newEditor);

    // WYSIWYG elements variables
    this._wysiwygEditor = getObject(this._objectName + "_wEditor");
    this._wysiwygWindow = isCompatible?getObject(this._objectName).contentWindow:getObject(this._objectName);
    this._wysiwygFrame  = isCompatible?this._wysiwygWindow.document:this._wysiwygWindow;

    // Launch initialization
    this.initWysiwyg();
  }
  else
  {
    alert(warningMessages['missingArguments']);
  }
}

wEditor.prototype.initWysiwyg = function()
{
  initStart = new Date();
  
  if(isCompatible)
  {    
    // Enabling DesignMode
    this._wysiwygFrame.designMode = "On";
    
    // Get enabled commands
    this.getEnabledCommands();
    
    // Don't use CSS properties in Gecko engine based browser
    if(isGecko) this._wysiwygFrame.execCommand('useCSS', false, null);
  
    // iFrame initialization
    htmlContent  = "<html>\n<head>\n";
    htmlContent += "<link href=\"" + includeDir + "inc.frame.css\" rel=\"stylesheet\" type=\"text/css\" />\n";
    htmlContent += "</head>\n<body style=\"font-size: " + sizeOptions[editorFontSize] + ";\">\n";
    htmlContent += (getObject(this._htmlField).value?getObject(this._htmlField).value:(isGecko?"<br />":"")) + "\n";
    htmlContent += "</body>\n</html>\n";
  
    this._wysiwygFrame.open();
    this._wysiwygFrame.write(htmlContent);
    this._wysiwygFrame.close();
    
    // Setting global events
    setEvent(this._wysiwygEditor, "mousedown", preventDefault);
    setEvent(this._wysiwygFrame, "keyup", getKeyCodes);
    if(isCompatible) setEvent(this._wysiwygEditor, "contextmenu", disableContextMenu);
    if(isCompatible) setEvent(this._wysiwygFrame, "contextmenu", disableContextMenu);
    if(isCompatible) setEvent(this._wysiwygFrame, "contextmenu", getMousePosition);
  
    // Setting specific objects events
    var currentObject = this._objectName;
    setObjectEvent(document, Array("mouseup", "keyup"), currentObject + ".showPanels(false)");
    setObjectEvent(this._wysiwygFrame, Array("mouseup", "keyup"), currentObject + ".showPanels(false)");
    setObjectEvent(this._wysiwygFrame, Array("mouseup", "keyup"), currentObject + ".showInfo(false)");
    if(isCompatible) setObjectEvent(window, "load", currentObject + ".checkStates()", 20);
    if(isCompatible) setObjectEvent(this._wysiwygFrame, Array("mouseup", "keyup"), currentObject + ".checkStates()", 20);
    if(isCompatible) setObjectEvent(this._wysiwygFrame, "keyup", currentObject + ".checkEvents()");
    if(isCompatible) setObjectEvent(this._wysiwygFrame, "contextmenu", currentObject + ".showContext(true)");
    
    // BUTTONS INITIALIZATIOH ->
    menuObject = getObject(this._objectName + "_wMenu");
    for(i in menuCommands)
    {
      commandName = menuCommands[i];
  
      if(commandName == "-SEP-")
      {
        separatorSrc = imageDir + imgPrefix + "separator." + imgExtension;
        menuObject.innerHTML += "<img src=\"" + separatorSrc + "\" alt=\"\" class=\"menuSeparator\" />";
      }
      else if(commandName == "-CR-") menuObject.innerHTML += "<br />";
      else
      {
        buttonId = this._objectName + "_wMenu-" + commandName;
        
        // Add button
        menuObject.innerHTML += "<img id=\"" + buttonId + "\" alt=\"\" onclick=\"" + this._objectName + ".wCommand('" + commandName + "')\" />";
        
        // Attributes
        setStyle(buttonId, "width", editorButtonWidth);
        setStyle(buttonId, "height", editorButtonHeight);
        getObject(buttonId).src          = imageDir + imgPrefix + commandName.toLowerCase() + (!enabledCommands[commandName]?"_disabled":"") + "." + imgExtension;
        getObject(buttonId).unselectable = true;
        getObject(buttonId).className    = "menuItem";
        
        if(typeof(altCommands[commandName]) != "undefined")
        {
          if(typeof(altCommands[commandName][0]) != "undefined") getObject(buttonId).title = altCommands[commandName][0];
          
          // Add shortcut if exists
          if(typeof(altCommands[commandName][1]) != "undefined" && typeof(altCommands[commandName][2]) != "undefined")
          {
            altCommands[commandName][1] += globalMessages['functionShortcut'].replace(/%CHARCODE%/i, String.fromCharCode(altCommands[commandName][2])).toUpperCase();
          }
        }
        
        // Setting events
        setTimeout("getObject(\"" + buttonId + "\").onmouseover = setButtonOver;", 0);
        setTimeout("getObject(\"" + buttonId + "\").onmouseout  = setButtonOut;", 0);
      }
    }
    setStyle(menuObject, "display", "block"); // Display menu when loaded
    
    // PANELS INITIALIZATION ->
    for(i in menuCommands)
    {
      if(objectExists(this._objectName + "_wMenu-" + menuCommands[i]))
      {
        panelId  = this._objectName + "_panel" + menuCommands[i];
        buttonId = this._objectName + "_wMenu-" + menuCommands[i];
  
        // Setting buttons events
        getObject(buttonId).onmouseover = setButtonOver;
        getObject(buttonId).onmouseout  = setButtonOut;
  
        // Panels initialization
        if(objectExists(panelId)) controlStates[panelId] = false;
      }
    }
    
  	// FONT COLOR PANEL
  	tInitStarted = false;
  	countPerLine = 1;
  	
  	newColorItem = "<table cellpadding=\"0\" cellspacing=\"" + (isMSIE?2:0) + "\" border=\"0\">\n<tr>\n";
  	for(i in colorOptions)
  	{
      colorOptionId = this._objectName + "_panelForeColor-" + colorOptions[i];
  
      // Add color item
      newColorItem += countPerLine == 1 && tInitStarted?"</tr>\n<tr>\n":"";
      newColorItem += "<td id=\"" + colorOptionId + "\" class=\"colorItem\" onclick=\"" + this._objectName + ".wCommand('ForeColor', '" + i + "')\">&nbsp;</td>\n";
  
      countPerLine = countPerLine == perLineItem?1:countPerLine + 1;
      tInitStarted = true;
  	}
  	newColorItem += "</tr>\n</table>\n";
  	
  	getObject(this._objectName + "_panelForeColor-content").innerHTML += newColorItem;
  	
  	for(i in colorOptions)
  	{
      colorOptionId = this._objectName + "_panelForeColor-" + colorOptions[i];
      
      // Attributes
      setStyle(colorOptionId, "backgroundColor", i);
      getObject(colorOptionId).title        = colorOptions[i];
      getObject(colorOptionId).unselectable = true;
  	}
  
  	// FONT SIZE PANEL
    sizePanel = this._objectName + "_panelFontSize";
    
  	// Add size item
    for(i in sizeOptions)
  	{
      buttonId = sizePanel + "-size" + i;
  
      // Add size option
      getObject(sizePanel + "-content").innerHTML += "<div id=\"" + buttonId + "\" onclick=\"" + this._objectName + ".wCommand('FontSize', " + i + ")\"><div class=\"sizeLabel\">" + i + "<div></div>";
  
      // Attributes
      setStyle(buttonId, "fontSize", sizeOptions[i]);
      getObject(buttonId).className    = "menuItem";
      getObject(buttonId).unselectable = true;
  
      // Setting size options events
      setTimeout("getObject(\"" + buttonId + "\").onmouseover = setButtonOver;", 0);
      setTimeout("getObject(\"" + buttonId + "\").onmouseout  = setButtonOut;", 0);
  	}
    
  	// MARKUPS PANEL
    markupPanel = this._objectName + "_panelAddMarkups";
    
  	// Add size item
    for(i in markupOptions)
  	{
      buttonId = markupPanel + "-" + markupOptions[i];
  
      // Add size option
      getObject(markupPanel + "-content").innerHTML += "<div id=\"" + buttonId + "\" onclick=\"" + this._objectName + ".wCommand('AddMarkups', '" + markupOptions[i] + "')\">" + markupOptions[i] + "</div>";
      
      // Attributes
      getObject(buttonId).className    = "menuItem";
      getObject(buttonId).unselectable = true;
      
      // Setting markup options events
      setTimeout("getObject(\"" + buttonId + "\").onmouseover = setButtonOver;", 0);
      setTimeout("getObject(\"" + buttonId + "\").onmouseout  = setButtonOut;", 0);
  	}
  	
  	// Hide markups button if no markups was configured
  	if(markupOptions.length == 0) setStyle(this._objectName + "_wMenu-AddMarkups", "display", "none");
    
    // CONTEXTUAL MENU INITIALIZATION ->
  	contextPanel = this._objectName + "_wContextMenu";
  
    for(i in contextCommands)
    {
      commandName = contextCommands[i];
      
      if(commandName == "-SEP-")
      {
        getObject(contextPanel + "-content").innerHTML += "<div class=\"menuSeparator\"></div>";
      }
      else
      {
        buttonId = contextPanel + "-" + commandName;
        
        // Add contextual option
        imgSrc = imageDir + imgPrefix + commandName.toLowerCase() + (!enabledCommands[commandName]?"_disabled":"") + "." + imgExtension;
        getObject(contextPanel + "-content").innerHTML += "<div id=\"" + buttonId + "\" onclick=\"" + this._objectName + ".wCommand('" + commandName + "')\"><div class=\"itemLabel\"><img id=\"" + buttonId + "-image\" src=\"" + imgSrc + "\" alt=\"\">" + altCommands[commandName][0] + "</div></div>";
  
        // Attributes
        getObject(buttonId).className    = "menuItem" + (!enabledCommands[commandName]?"_disabled":"");
        getObject(buttonId).unselectable = true;
  
        // Setting contextual options events
        setTimeout("getObject(\"" + buttonId + "\").onmouseover = setButtonOver;", 0);
        setTimeout("getObject(\"" + buttonId + "\").onmouseout  = setButtonOut;", 0);
      }
    }
    
    // Setting information frame's width
    setTimeout("setStyle(\"" + this._objectName + "_wInfo\", \"width\", (getObject(\"" + this._objectName + "\").offsetWidth - 6) + \"px\");", 0);
  }
  else
  {
    if(getObject(this._htmlField).value) this._wysiwygFrame.value = getObject(this._htmlField).value;
  }
  
  // End of initialization (and status bar message)
  initEnd = new Date();
  setStatusText(this._objectName, !isCompatible?warningMessages['noWysiwygSupport']:globalMessages['endInitMessage'].replace(/%TIME%/i, ((initEnd - initStart) / 1000)));
}
