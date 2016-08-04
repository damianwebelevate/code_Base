/* Copyright 2015, 2016 Damian O'Rourke
* Email: damiano_rourke@hotmail.com
* Website: damianorourke.com
*  This file is part of Triple Crown Custom - TCC

    TCC is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    TCC is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with TCC.  If not, see <http://www.gnu.org/licenses/>.
*/

function TextEditor(){

	this.addElement = function(id){

		// create a handlebar for the text line
		var blueBox = document.createElement("DIV");
		blueBox.setAttribute("class", "bigBlueBoxTwo");

		var topP = document.createElement("P");
		topP.setAttribute("title", "Move Text Row");
		topP.innerHTML = "&#x21c5;";
		blueBox.appendChild(topP);

		var container = document.createElement("DIV");
		container.setAttribute("id", "container_"+id);
		container.setAttribute("class", "outputContainer");

		var div = document.createElement("DIV");
		var title = document.createElement("DIV");
		title.setAttribute("class", "wrap");
		title.setAttribute("id", "title_"+id);
		// var textWrap = document.createTextNode("Text Row "+id);
		// title.appendChild(textWrap);

		div.setAttribute("class", "active boxOrig");
		div.setAttribute("id", id);
		div.setAttribute("title", "Text Row "+id);
		div.setAttribute("contenteditable", true);
		
		// add the above blue box on the right hand side code to the longline:
		title.appendChild(blueBox);


		// create the gold bar
		var goldBar = document.createElement("DIV");
		goldBar.setAttribute("class", "newDone");
		goldBar.setAttribute("id", "Close_"+id);

		var doneDiv = document.createElement("DIV");
		doneDiv.setAttribute("class", "bigGoldBoxTwo");

		var endWrap = document.createElement("P");
		endWrap.innerHTML = "<span class='span'>&#x2713;</span>Finished Editing";
		endWrap.setAttribute("id","Done_"+id);
		endWrap.setAttribute("title", "Finished Editing");
		endWrap.setAttribute("class", "doneEditing");

		doneDiv.appendChild(endWrap);
		goldBar.appendChild(doneDiv);
		container.appendChild(title);
		container.appendChild(div);
		container.appendChild(goldBar);
		return container;
	}

	this.addHiddenField = function(id, text, value){

		var holder = document.createElement("DIV");
		var hidden = document.createElement("INPUT");
		var label = document.createElement("LABEL");
		label.setAttribute("style", "display: none;");
		hidden.setAttribute("type", "hidden");
		hidden.setAttribute("id", id);
		hidden.setAttribute("name", id);
		hidden.setAttribute("value", value);
		hidden.setAttribute("readonly", true);
		label.setAttribute("for", id);
		var labelText = document.createTextNode(text);
		label.appendChild(labelText);

		holder.appendChild(label);
		holder.appendChild(hidden);

		return holder;
	}

}