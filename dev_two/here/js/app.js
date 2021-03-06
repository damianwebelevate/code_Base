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

// set up a default object
function pimlicoDefault(title, mainImage, baseRug, baseBinding, basePiping){
	this.title = title;
	this.mainImage = mainImage;
	this.baseRug = baseRug;
	this.baseBinding = baseBinding;
	this.basePiping = basePiping;
	
};


function loadAspects(string, body, binding, piping){


	var url = 'http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/inc/js/source2.json';
	var y = $j.getJSON(url, callBack);

	var search = string || 'Belmont Quilted Stable Blanket';


	// var orientation = direction || 'left';

	var base = body;

	var pipe = piping;

	var bind = binding;

	var baseRug, baseBinding, basePiping = "";

	// console.log("options array: "+optionsArray);

	// alert(search);

	console.log("++++++++++++++++++++++++++++++++++++++++++++++");
	console.log("passed in:");
	console.log(string);
	console.log(body);
	console.log(binding);
	console.log(piping);
	console.log("new pipe: "+pipe+" new bind: "+bind);
	console.log("++++++++++++++++++++++++++++++++++++++++++++++");

	function callBack(data){
			

			for(var i in data){

				if(i === search){

					some = data[i].lhs;
					
					title = search;

					mainImage = some.horse.main;


					for(var j in some.bodycolors){
					if(j === base){baseRug = some.bodycolors[j];}};
					
					for(var w in some.binding){
					if(w === bind){baseBinding = some.binding[w];}};


					for(var col in some.piping){
					if(col === pipe){ basePiping = some.piping[col];}};
										
				}
			}

			console.log("**************************************");
			console.log("before object image render....");
			console.log(title);
			console.log(mainImage);
			console.log(baseRug);
			console.log(baseBinding);
			console.log(basePiping);
			console.log("**************************************");

			var x = new pimlicoDefault(title, mainImage, baseRug, baseBinding, basePiping);
			
			
			createImage(x);


		};// ends the inner function 

};


function createImage(obj){

console.log("================================================");
console.log("object receives: ");
	console.log(obj.title);
	console.log(obj.mainImage);
	console.log(obj.baseRug);
	console.log(obj.baseBinding);
	console.log(obj.basePiping);
console.log("================================================");

	var heading = document.getElementById('title');
	heading.innerHTML = "<span></span>" + obj.title ;

	heading.style.visibility = "visible";

	$j('#mainImageLeft').attr({'src': obj.mainImage, 'class': 'image'});
	$j('#defaultBaseColor').attr({'src': obj.baseRug, 'class': 'image'});
	$j('#defaultPipingColor').attr({'src': obj.basePiping, 'class': 'image'});
	$j('#defaultBindingColor').attr({'src': obj.baseBinding, 'class': 'image'});
	
	$j('#reflectMainImage').attr({'src': obj.mainImage, 'class': 'winImg'});
	$j('#reflectBaseImage').attr({'src': obj.baseRug, 'class': 'winImg'});
	$j('#reflectPipeImage').attr({'src': obj.basePiping, 'class': 'winImg'});
	$j('#reflectBindImage').attr({'src': obj.baseBinding, 'class': 'winImg'});

	return;
};


function convertToImage(canvas){
	var img = new Image();
	img.src = canvas.toDataURL("image/png", 1);

	return img;
};







