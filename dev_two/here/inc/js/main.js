
// set up a default object
function pimlicoDefault(title, mainImage, baseRug, baseBinding, piping){
	this.title = title;
	this.mainImage = mainImage;
	this.baseRug = baseRug;
	this.baseBinding = baseBinding;
	this.piping = piping;
	
};


function loadAspects(string, direction, body, binding, piping){

	var url = 'http://localhost/dev/here/wp-content/themes/triple/inc/js/source2.json';
	var y = $j.getJSON(url, callBack);

	var search = string || 'Belmont Quilted Stable Blanket';


	var orientation = direction || 'left';

	var base = body || 'navy';

	var pipe = piping || 'white';

	var bind = binding || 'bind_silvergrey';

	// console.log("options array: "+optionsArray);

	// alert(search);

	// console.log("++++++++++++++++++++++++++++++++++++++++++++++");
	// console.log("passed in:");
	// console.log(search);
	// console.log(orientation);
	// console.log(base);
	// console.log(pipe);
	// console.log(bind);
	// console.log("++++++++++++++++++++++++++++++++++++++++++++++");

	function callBack(data){

		if(orientation === 'left'){
			doFunction(data, orientation);
		}else{
			doFunction(data, orientation);
		}


		function doFunction(data, orientation){
			
// console.log("im called....");
// var orientation = orientation;
// var mainImage;

for(var i in data){

	if(i === search){

		some = data[i].lhs;
		
		title = search;

		mainImage = some.horse.main;


		for(var j in some.bodycolors){
		if(j === base){baseRug = some.bodycolors[j];}};
		// else{
		// baseRug = some.bodycolors.navy;
		// }
		// };

		for(var w in some.binding){
		if(w === bind){baseBinding = some.binding[w];}};
		// else{baseBinding = some.binding.bind_silvergrey;}};


		for(var col in some.piping){
		if(col === pipe){ piping = some.piping[col];}};
							
	}// end of loop
}

			// console.log("**************************************");
			// console.log("before object image render....");
			// console.log(title);
			// console.log(mainImage);
			// console.log(baseRug);
			// console.log(baseBinding);
			// console.log(piping);
			// console.log("**************************************");

			var x = new pimlicoDefault(title, mainImage, baseRug, baseBinding, piping);
			
			
			createImage(x);


		};// ends the inner function doFunction

		
		
	};

};


function createImage(obj){

// console.log("================================================");
// console.log("object receives: ");
// 	console.log(obj.title);
// 	console.log(obj.mainImage);
// 	console.log(obj.baseRug);
// 	console.log(obj.baseBinding);
// 	console.log(obj.piping);
// console.log("================================================");

	var heading = document.getElementById('title');
	heading.innerHTML = obj.title ;

	heading.style.visibility = "visible";

	$j('#mainImageLeft').attr({'src': obj.mainImage, 'class': 'image'});
	$j('#defaultBaseColor').attr({'src': obj.baseRug, 'class': 'image'});
	$j('#defaultPipingColor').attr({'src': obj.piping, 'class': 'image'});
	$j('#defaultBindingColor').attr({'src': obj.baseBinding, 'class': 'image'});
	
	
	return;
};


function convertToImage(canvas){
	var img = new Image();
	img.src = canvas.toDataURL("image/png", 1);

	return img;
};







