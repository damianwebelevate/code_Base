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


(function(){
	
	$j('#onToEmbroidery').on("click", function(e){

			// e.preventDefault();

			var x = getCanvasElements();

			window.parent.document.getElementById('addEmbroideryImage').src = $j('#value4').val();

			var data = $j('#getName').serialize();


			$j.ajax({
			url: 'http://dev.triplecrowncustom.com/app/controller/getColors.php',
			data: data,
			type: 'POST',
			dataType: 'json',
				success: function(json){

					console.log(json);

					var output = "";
					for(var item in json.POSTED){
						output += "<p><strong>KEY: "+item+"</strong> => VALUE: "+json.POSTED[item]+"</p>";
					}
					window.parent.document.getElementById('fromServer').innerHTML = output;

					window.parent.document.getElementById('addEmbroideryImage').src = json.Image;
					
					window.parent.document.getElementById('chooseColors').style.display = "none";

					window.parent.document.getElementById('initial').style.display = "block";

					
				}
			});

	});

	function getCanvasElements(){

		// first image to draw to the canvas
		var a = document.getElementById('mainImageLeft').src;
		var b = createImage(a);

		// second image to draw to the canvas
		var c = document.getElementById('defaultBaseColor').src;
		var d = createImage(c);

		var e = document.getElementById('defaultBindingColor').src;
		var f = createImage(e);

		var g = document.getElementById('defaultPipingColor').src;
		var h = createImage(g);

		createCanvas(b, d, h, f);

		return true;
	};

	function createImage(src){
		var img = new Image();
		img.src = src;
		img.setAttribute("width", "1000");
		img.setAttribute("height", "795");
		return img;
	};

	function createCanvas(img1, img2, img3, img4){

		var x = document.createElement('CANVAS');
		x.width = img1.width;
		x.height = img1.height;
		x.id = "horseTemp";
		x.className = "image";

		// console.log(x);

		var out = document.getElementById('canvas');
		out.appendChild(x);

		x.getContext("2d").drawImage(img1, 0, 0);
		x.getContext("2d").drawImage(img2, 0, 0);
		x.getContext("2d").drawImage(img4, 0, 0);
		x.getContext("2d").drawImage(img3, 0, 0);


		var can = document.getElementById('horseTemp');

		var createImg = convertToImage(can);

		createImg.id = "horse";
		createImg.className = "image";

		out.removeChild(x);

		out.appendChild(createImg);

		$j('#value4').val(createImg.src);

	};


	function convertToImage(canvas){
		var img = new Image();
		img.src = canvas.toDataURL("image/png", 1);
		return img;
	};


})();


		



	


