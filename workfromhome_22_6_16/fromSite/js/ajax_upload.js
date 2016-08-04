
var app = app || {};

(function(o){


	"use strict";

	var ajax, getFormData, setProgress;

	ajax = function(data){

		var request = new XMLHttpRequest();
		var uploaded;

		function getServerResponse() {
		if(this.readyState === 4){
				if(this.status === 200){
				
					uploaded = JSON.parse(this.response);
					
					if(typeof o.options.finished === 'function'){
						o.options.finished(uploaded);
					}

				} else {
					if(typeof o.options.error === 'function'){
						o.options.error();
					}
				}
			}
		}

		function getPercentageUpload(e, uploaded){
			var percent;
			if(e.lengthComputable === true){
				// to see the values of what is being uploaded in real time
				// console.log(e);
				// converts to a % percentage
				percent = Math.round((event.loaded / event.total) * 100);
				// to view this in console:
				// console.log(percent);
				// pass the percent value to the setProgress() method
				setProgress(percent);
			}
		}
	
		request.upload.addEventListener('progress', getPercentageUpload, false);
	
		request.addEventListener("readystatechange", getServerResponse, false);
		request.open('post', o.options.processor);
		request.send(data);

	};

	getFormData = function(source){
		
		var data = new FormData();
		var i;

		for (i = 0; i < source.length; i++) {
			data.append('files[]', source[i]);
		}

		return data;
	};

	setProgress = function(value){
		// quick check to see if the percent was passed to this method:
		// console.log(value);
		if(o.options.progressBar !== undefined){
			o.options.progressBar.style.width = value ? value + '%' : 0;
		}
		if(o.options.progressText !== undefined){
			o.options.progressText.textContent = value ? value + '%' : '';
		}
	};

	o.uploader = function(options){
		
		o.options = options;
		if(o.options.files !== undefined){
			
			ajax(getFormData(o.options.files));
		}
	};

}(app));