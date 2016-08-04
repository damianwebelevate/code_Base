(function(){

	"use strict";

	var dropArea = document.getElementById('dropArea');

	var fillBar = document.getElementById('fill');

	var fillBarText = document.getElementById('fill_text');

	var userReport = document.getElementById('hidden_a');

	var fill = document.getElementById('fill');


	var startUpload = function(files){

	var checkFiles = document.getElementById('file_upload_normal').value;

		app.uploader({

			files: files,

			progressBar: fillBar,

			progressText: fillBarText,

			processor: 'http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/uploads/upload.php',

			finished: function(data){

				var i;

				var imgWrap;

				var output;

				var imageSource;

				var status;

				var currFile;

				var error_Area;

				var the_image;

				for(i = 0; i < data.length; i++){
					currFile = data[i];

					// create a div element to house our returning data
					output = document.createElement('div');
					imgWrap = document.createElement('div');
					imgWrap.style.display = "inline-block";
					imgWrap.setAttribute("id", "imgWrap");
					output.className = 'upload_upload';
					error_Area = document.createElement('div');
					error_Area.className = 'error_Area';


					if(currFile.uploaded){
							
							var hip = new Image();

							var wrapper = document.createElement('div');
							wrapper.setAttribute("id", "hipWrap");
							var para = document.createElement("p");
							para.setAttribute("id","deleteImage");
							var wrapContent = document.createTextNode("X");
							para.appendChild(wrapContent);
							

							var frame = document.getElementById('innerRing');

							console.log("current file......"+currFile.file);

							var fullRelative = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/uploads/uploads/" + currFile.file;
							// console.log(relative);
							// var relative = relative.replace("embroidery/", "");
							// console.log(relative);
							hip.setAttribute("src", fullRelative);
							hip.src = fullRelative;
							
							hip.className = "upImage";
							hip.setAttribute("id", "upImage");
							hip.setAttribute("title", currFile.file);
							
							hip.setAttribute("onload", "myFunction();");

							hip.src = fullRelative;

							wrapper.appendChild(para);
							wrapper.appendChild(hip);
							
						

							var frag = document.createDocumentFragment();
							frag.appendChild(wrapper);
							frame.appendChild(frag);

					}else{
						
						fill.style.background = 'red';
						error_Area.textContent = 'Failed to upload ... file type not supported';
						var checkFiles = document.getElementById('file_upload_normal').value = "";
					}
					status = document.createElement('span');
					status.textContent = currFile.uploaded ? 'Uploaded' : 'Failed';
					output.appendChild(status);
					output.appendChild(error_Area);
					userReport.appendChild(output);
				}


					userReport.className = '';
			},

			// use the error or defined list of errors from server here
			error: function(){

				console.log("Error....Could Not Connect To Server");

			}



		});//close accessing object/server response



}// start upload


function overRide_Default(e) {

	var normalUploadFiles = document.getElementById('file_upload_normal').files;

	e.preventDefault();

	if(normalUploadFiles != ""){
		startUpload(normalUploadFiles); 
	}
			

}

var button = document.getElementById("normal_upload_submit");

button.addEventListener("click", overRide_Default, false);

}());//end of file