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
wEditor.prototype.wCommand = function(commandId, commandValue)
{
  commandValue = commandValue || false;
  
  if(enabledCommands[commandName])
  {  
    // Hide information bar
    this.showInfo(false);
    if(isCompatible) this.showContext(false);
    
    // Focus iFrame or Textarea
    this._wysiwygWindow.focus();
  
    switch(commandId)
  	{
      case "AboutEditor": // Display editor information
        this.showInfo(globalMessages['aboutMessage'], "wEditor.gif");
      break;
  
      case "AddMarkups":
        if(!commandValue) this.showPanels(commandId);
        else
        {
          // Set start and end markups
          startMarkup = "[" + commandValue + "]";
          endMarkup   = "[/" + commandValue + "]";
  
          if(isIE)
          {
            // Get selection and paste replacement with markups
            tSelection = this._wysiwygFrame.selection.createRange();
            sTextValue = tSelection.htmlText;
            tSelection.pasteHTML(startMarkup + sTextValue + endMarkup);
          }
          else if(isGecko)
          {
            // Get selection and various objects
            tSelection = this._wysiwygWindow.getSelection();
            tRange     = tSelection?tSelection.getRangeAt(0):this._wysiwygFrame.createRange();
            rNode      = tRange.startContainer;
  
            // Remove existing ranges
            tSelection.removeAllRanges();
  
            // Update range value
          	if(rNode.insertData)
          	{
              dFragment = tRange.extractContents();
              tRange.insertNode(document.createTextNode(endMarkup));
              tRange.insertNode(dFragment);
              tRange.insertNode(document.createTextNode(startMarkup));
            }
            else this.showInfo(warningMessages['notFocused']);
          }
          else this.showInfo(warningMessages['notSupported']);
        }
      break;
  
      case "RemoveFormat": // Removes formatting tags
        validation = confirm(promptMessages['removeFormat']);
        if(validation) this._wysiwygFrame.execCommand(commandId, false, null);
      break;
  
      case "CreateLink": // Create a link
  			if(this.getSelectedText() != "" || isIE)
  			{
          commandValue = isIE?null:prompt(promptMessages['enterURL'], "http://");
    			if(commandValue != "http://" && commandValue != "") this._wysiwygFrame.execCommand(commandId, isIE?true:false, commandValue);
    		}
    		else this.showInfo(warningMessages['noSelection']);
  		break;
  
  		case "InsertImage": // Insert image
  			commandValue = prompt(promptMessages['enterImageURL'], "http://");
  			if(commandValue != "http://" && commandValue != "") this._wysiwygFrame.execCommand(commandId, false, commandValue);
  		break;
  
  		case "ForeColor": // Set font color and size
  		case "FontSize":
  		  if(!commandValue) this.showPanels(commandId);
  			else
        {
          // Update current color
          if(commandId == "ForeColor") updateCurrentColor(this._objectName, commandValue);
          if(commandId == "FontSize")  updateCurrentSize(this._objectName, commandValue);
  
          this._wysiwygFrame.execCommand(commandId, false, commandValue);
        }
  		break;
  
  		default: // Others commands
  			try      { this._wysiwygFrame.execCommand(commandId, false, null); }
  			catch(e) { this.showInfo(warningMessages['notSupported']); }
  		break;
  	}
  	
  	// Focus iFrame
    this._wysiwygWindow.focus();
  
  	if(commandId != "AddMarkups") this.checkStates();
  }
}

wEditor.prototype.getEnabledCommands = function() // Test if command is supported
{  
  for(i in menuCommands)
  {
    commandName = menuCommands[i];
    
    if(commandName != "-SEP-" && commandName != "-CR-")
    {
      try      { commandEnabled = this._wysiwygFrame.queryCommandEnabled(commandName) }
      catch(e) { commandEnabled = true; }
      
      enabledCommands[commandName] = commandEnabled;
    }
  }
}

wEditor.prototype.checkStates = function() // Check formatting states
{
  this._wysiwygWindow.focus();
  
  // Get enabled commands
  this.getEnabledCommands();

  for(i in controlStatus)
	{
  	try
    {
    	commandState = this._wysiwygFrame.queryCommandState(i);
      buttonId     = this._objectName + "_wMenu-" + i;

      if(controlStates[buttonId] != commandState)
    	{
        controlStates[buttonId] = commandState;
        getObject(buttonId).className = "menuItem" + (commandState?"_selected":"");
      }
    }
    catch(e) { return false; }
  }
  
  // Update image sources
  for(i in menuCommands)
  {
    if(menuCommands[i] != "-SEP-" && menuCommands[i] != "-CR-")
    {      
      getObject(this._objectName + "_wMenu-" + menuCommands[i]).src = imageDir + imgPrefix + menuCommands[i].toLowerCase() + (!enabledCommands[menuCommands[i]]?"_disabled":"") + "." + imgExtension;
    }
  }
  
  for(i in contextCommands)
  {
    if(contextCommands[i] != "-SEP-")
    {
      itemName  = this._objectName + "_wContextMenu-" + contextCommands[i];
      itemImage = itemName + "-image";
      
      getObject(itemImage).src      = imageDir + imgPrefix + contextCommands[i].toLowerCase() + (!enabledCommands[contextCommands[i]]?"_disabled":"") + "." + imgExtension;
      getObject(itemName).className = "menuItem" + (!enabledCommands[contextCommands[i]]?"_disabled":"");
    }
  }

  // Update currents value
  updateCurrentColor(this._objectName, this._wysiwygFrame.queryCommandValue("ForeColor"));
  updateCurrentSize(this._objectName, this._wysiwygFrame.queryCommandValue("FontSize"));
}

wEditor.prototype.checkEvents = function() // Check events
{
  if(keyCodes['ctrlKey'] && keyCodes['altKey'])
  {
    for(i in altCommands)
    {
      if(typeof(altCommands[i][2]) != "undefined" && keyCodes['keyCode'] == altCommands[i][2]) this.wCommand(i);
    }
  }
}

wEditor.prototype.showContext = function(sBoolean) // Display/Hide contextual menu
{
  cMenu = getObject(this._objectName + "_wContextMenu");

  if(sBoolean)
  {
    posX  = mousePosition[0] + getOffsetLeft(this._objectName);
    posY  = mousePosition[1] + getOffsetTop(this._objectName);

    setStyle(cMenu, "display", "block");

    // Test contextual menu position
    if(posX + cMenu.offsetWidth >= getOffsetLeft(this._objectName) + getObject(this._objectName).offsetWidth)
    {
      posX = posX - cMenu.offsetWidth;
    }
    if(posY + cMenu.offsetHeight >= getOffsetTop(this._objectName) + getObject(this._objectName).offsetHeight)
    {
      posY = posY - cMenu.offsetHeight;
    }

    // Update style
    setStyle(cMenu, "top", posY + "px");
    setStyle(cMenu, "left", posX + "px");
    
    panelStates[this._objectName + "_contextMenu"] = true;
  }
  else
  {
    setStyle(cMenu, "display", "none");
    panelStates[this._objectName + "_contextMenu"] = false;
  }
}

wEditor.prototype.showInfo = function(messageText, iconUri) // Display information message
{
  messageText = messageText || false;
  iconUri     = iconUri     || "editor_warning.gif";
  wInfo       = this._objectName + "_wInfo";

  if(messageText)
  {
    getObject(wInfo).innerHTML = "<img src=\"" + imageDir + iconUri + "\" alt\"\" />&nbsp;" + messageText;
    setStyle(wInfo, "display", "block");
  }
  else setStyle(wInfo, "display", "none");
}

wEditor.prototype.showPanels = function(commandId) // Display/Hide options panels
{
  commandId = commandId || false;
  
  // Hide contextual menu
  if(isCompatible) this.showContext(false);
  
  if(commandId)
  {
    buttonId = this._objectName + "_wMenu-" + commandId;
    panelId  = this._objectName + "_panel" + commandId;
    
    // Set panel position
    setStyle(panelId, "top", (getOffsetTop(buttonId) + getObject(buttonId).offsetHeight + (isGecko?-1:0)) + "px");
    setStyle(panelId, "left", (getOffsetLeft(buttonId) + (isMSIE?1:0)) + "px");

    setTimeout("setStyle(\"" + panelId + "\", \"display\", \"block\"); panelStates['" + buttonId + "'] = true;", 0);
  }
  else
  {
    for(i in menuCommands)
    {
      buttonId = this._objectName + "_wMenu-" + menuCommands[i];
      panelId  = this._objectName + "_panel" + menuCommands[i];
  
      if(objectExists(panelId) && panelStates[buttonId])
      {
        panelStates[buttonId]         = false;
        getObject(buttonId).className = "menuItem";
        setStyle(panelId, "display", "none");
      }
    }
  }
}

wEditor.prototype.getSelectedText = function() // Get selection
{
  if(isIE) qText = this._wysiwygFrame.selection.createRange().text;
  else if(isGecko) qText = this._wysiwygWindow.getSelection();
  else return false;
  return qText;
}
