(function($){

	var menuLinks = ['#firstPage', '#secondPage', '#thirdPage', '#fourthPage', '#fifthPage', '#sixthPage'];
	// var delay = false;
	$(window).bind("touchstart, click", callGetCurrentPage);
	window.addEventListener('mousewheel', mouseWheelHandler);
	window.addEventListener('DOMMouseScroll', mouseWheelHandler);
	window.addEventListener('keydown', keyDownHandler);
	// window.addEventListener('hashchange', hashChangeHandler);
	window.addEventListener('hashchange', hashChangeHandler);

	$(window).on('load', function(){

		var x = getWindow();
		var height = x.actualHeight;
		var width = x.width;
		var diff = x.diff;
		var menu = x.menu;
		var sMenu = $('#sideMenu').height();
		var sMenuMargin = (height - sMenu) / 2;
		var half = x.actualHeight/2;

		if(width < 614){

			// $(document.body).css("overflow", 'hidden');

		}else{

			$('.section').css("height", height);
			$('.inside').css({"height": diff, "padding-top": menu+"px"});
			$('#innerSectionA').css("height", height +"px");
			$('#sideMenu').css("margin-top", sMenuMargin +"px");
			$('#menu').css("width", width);
		}

			var getCurrentHash = window.location.hash || "#firstPage";
			var page = getPositionInArray(getCurrentHash);
			var href = "";
			var page = getCurrentPage();
			switchPosition(page, getCurrentHash);

	});


	$(window).on("resize", function(){

		var x = getWindow();
		var height = x.actualHeight;
		var width = x.width;
		var diff = x.diff;
		var menu = x.menu;
		var sMenu = $('#sideMenu').height();
		var sMenuMargin = (height - sMenu) / 2;
		var half = x.actualHeight/2;

		if(width < 614){


		}else{

			$('.section').css("height",height);
			$('.inside').css({"height": diff, "padding-top": menu+"px"});
			$('#innerSectionA').css("height", height +"px");
			$('#sideMenu').css("margin-top", sMenuMargin +"px");
			$('#menu').css("width", width);
		}	
			
		var getCurrentHash = window.location.hash || "#firstPage";
		var page = getPositionInArray(getCurrentHash);
		var href = "";
		var page = getCurrentPage();
		switchPosition(page, getCurrentHash);
	});

	// the current page visible
	function getCurrentPage(){
		var page = window.location.hash;
		var pageNumber = "";

		if(!page){
			window.location.href = '#firstPage';
			pageNumber = getPositionInArray(page);
		}else{
			pageNumber = getPositionInArray(page);
		}

		return pageNumber;

	}


	// function that returns the position in the array
	function getPositionInArray(pos){
		for(var i = 0; i != menuLinks.length; i++){
			if(menuLinks[i] == pos) return i;
		}		
	}

	// up or down direction effectively returns the position in the array
	function getNextPositionInArray(pos, dir){

		var len = menuLinks.length;

		for(var i = 0; i != menuLinks.length; i++){

				if(dir == "up" && pos == 0){
					// top of page
					var updatedString = window.location.href;
					return {"index" : 0, "location" : updatedString};
				}else if(dir == "down" && pos == 5){
					// bottom of page
					var updatedString = window.location.href;
					return {"index" : 5, "location" : updatedString};
				}else{
					if(i == pos){
						if(dir == "down"){

							var a = window.location.href;
							var string = a.replace(menuLinks[i], "");
							i++;
							var updatedString = string+menuLinks[i];
							// window.location.href = updatedString;
							return {"index" : i, "location" : updatedString};

							
						}else{
							var a = window.location.href;
							var string = a.replace(menuLinks[i], "");
							i--;
							var updatedString = string+menuLinks[i];
							// window.location.href = updatedString;
							return {"index" : i, "location" : updatedString};
							
						}
					}
				}

		}// for

	}

	// for click events then switchPosition
	function callGetCurrentPage(event){
		event.preventDefault();
		$("a").each(function(i, n){
			if($(n) != null){
				$(n).on("click", function(){
					// if(delay) return false;
					var link = $(this).attr("href");
					var position = getPositionInArray(link);
					switchPosition(position, link);
				});
			}
		});
		
	}

	// catches the mouse wheel event and calls the relevant functions
	function mouseWheelHandler(event){
			event.preventDefault();

			var dir = "";
			var delta = event.wheelDelta || -event.detail;

			if(delta >= 0){
				dir = "up";
			}else if(delta <= -1){
				dir = "down";
			}else{
				return;
			}

			var currentPage = getCurrentPage();
			var nextPage = getNextPositionInArray(currentPage, dir);
			switchPosition(nextPage.index, nextPage.location);
		
	}


	// navigates to the appropriate page
	function switchPosition(page, location){
		console.log("passed in(index of the page): "+page);
		console.log("location of the page(passed in): "+location);
		var firstPage, secondPage, thirdPage, fourthPage, fifthPage, sixthPage = "";
		var location = location || "";
		var windowHeight = window.innerHeight;

		var width = window.innerWidth;

		firstPage = document.getElementById("firstPage").offsetTop;
		secondPage = document.getElementById("secondPage").offsetTop;
		thirdPage = document.getElementById("thirdPage").offsetTop;
		fourthPage = document.getElementById("fourthPage").offsetTop;
		fifthPage = document.getElementById("fifthPage").offsetTop;
		sixthPage = document.getElementById("sixthPage").offsetTop;

		
		// console.log(firstPage+" "+secondPage+" "+thirdPage+" "+fourthPage+" "+fifthPage+" "+sixthPage);

		// if(delay) return false;

		switch(page){
			case 0:
				hashChangeHandler(firstPage, location, "first-child", "");
			break;
			case 1:
				hashChangeHandler(secondPage, location, "nth-child(1)", "nth-child(2)");
			break;
			case 2:
				hashChangeHandler(thirdPage, location, "nth-child(1)", "nth-child(3)");
			break;
			case 3:
				hashChangeHandler(fourthPage, location, "nth-child(2)", "nth-child(4)");
			break;
			case 4:
				hashChangeHandler(fifthPage, location, "nth-child(4)", "nth-child(5)");
			break;
			case 5:
				hashChangeHandler(sixthPage, location, "nth-child(5)", "nth-child(6)");
			break;
			default:
			return;
		}

	}

	// keybord up/down 
  	function keyDownHandler(event){
  		var tag = event.target.tagName.toLowerCase();
  		var dir = "";
  		var currentPage = getCurrentPage();
  		var nextPage = "";
  		
  		// if(delay) return false;

  		switch(event.which){
  			// page up key
  			case 33:
  				if(tag != 'input' && tag != 'textarea') {
  					dir = "up";
  				}
  				nextPage = getNextPositionInArray(currentPage, dir);
  				switchPosition(nextPage.index, nextPage.location);
  				break;
  			// page down key
  			case 34:
  				if(tag != 'input' && tag != 'textarea') {
  			 		dir = "down";
  			 	}
  			 	nextPage = getNextPositionInArray(currentPage, dir);
  				switchPosition(nextPage.index, nextPage.location);
  				break;
  			// end key
  			case 35:
  				if(tag != 'input' && tag != 'textarea') {
  			 		nextPage = getNextPositionInArray(currentPage, dir);
  					switchPosition(nextPage.index, '#sixthPage');
  				}
  				break;
  			// home key
  			case 36:
  				if(tag != 'input' && tag != 'textarea') {
  			 		nextPage = getNextPositionInArray(currentPage, dir);
  					switchPosition(nextPage.index, '#firstPage');
  				}
  				break;
  			// up arrow
  			case 38:
  				if(tag != 'input' && tag != 'textarea') {
  					dir = "up";
  				}
  				nextPage = getNextPositionInArray(currentPage, dir);
  				switchPosition(nextPage.index, nextPage.location);
  				break;
  			// down arrow
  			case 40:
  			 	if(tag != 'input' && tag != 'textarea') {
  			 		dir = "down";
  			 	}
  			 	nextPage = getNextPositionInArray(currentPage, dir);
  				switchPosition(nextPage.index, nextPage.location);
  				break;
  			default:
  			return;
  		}
  	}

  	// back and forward navigation:
  	function hashChangeHandler(page, location, pos1, pos2){
  		var page = page || "";
  		var location = location || "";
  		// top menu
  		var positionOne = pos1 || "";
  		// side menu
  		var positionTwo = pos2 || "";

  		console.log("called");
  		console.log(page+" "+location+" "+positionOne+" "+positionTwo);
		// $('html, body').stop().animate({
		// 	scrollTop: page
		// }, 1000, function(){
		// 	window.location.href = location;
		// 	$('a').removeClass("active");
		// 	$('#topMenu li:'+pos1+' a').addClass("active");
		// 	$('#sideMenu li:'+pos2+' a').addClass("active");
		// });
  	}

  	function getWindow(){
		var menu = document.getElementById('menu').offsetHeight;
		var width = window.innerWidth;
		var actualHeight = window.innerHeight;
		var diff = actualHeight - menu;
		var sectionHeight = diff / 2;

		if(diff < 480){
			diff = 480;
		}

		if(diff > 955){
			diff = 955;
		}

		return {"menu": menu, "diff" : diff, "sectionHeight" : sectionHeight, "width" : width, "actualHeight": actualHeight};
	}


})(jQuery);



$('input').on("focus", function(){
	$('#errorArea, #successArea').hide();
});

$('#getFeedback').on("submit", function(evt){
	evt.preventDefault();

	console.log("called");

	var data = $('#getFeedback').serialize();
	// var processor = 'https://www.horseware.com/hypocare/site2016/includes/mail.php';
	var processor = 'http://dev.triplecrowncustom.com/hypo/includes/mail.php';
	// var processor = 'https://www.horseware.com/hypocare/includes/mail.php';
	// var processor = 'http://localhost/hypo/includes/mail.php';

	$('.ajaxLoader').show();
	$('#sendForm').attr("disabled", "true");

	$.ajax({
	url: processor,
	data: data,
	type: 'POST',
	dataType: 'json',
		success: function(json){

			$('#successArea').hide();

			if(json.Error){
				for(var i in json.Error){
					$('#errorArea').html(json.Error[i]).show();
					setTimeout(function() { $("#errorArea").hide(); }, 5000);
				}

			}else{
				$('#successArea').html(json.Mail).show();
				setTimeout(function() { $("#successArea").hide(); }, 5000);
			}
			resetForm();
			$('.ajaxLoader').hide();
			$('#sendForm').attr("disabled", "false");
		}
	});

});


$('#nameName').on("keypress", function(){
	var count = $('#nameName').val().length +1;
	if(count >= 30){
		alert("max characters reached");
	}

});

$('#textArea').on("keypress", function(evt){
	var count = $('#textArea').val().length +1;
	if(count >= 500){
		alert("max characheters reached");
	}
});

$('#emailEmail').on("keypress", function(evt){
	var count = $('#emailEmail').val().length +1;
	if(count >= 254){
		alert("max characheters reached");
	}
});

function resetForm(){
	$('#nameName').val("");
	$('#emailEmail').val("");
	$('textArea').val("");
}

$('#mobileMenuOpen').on("click", function(evt){
	$('#mobileMenu').toggle();
});

$('#backToTop, #backToTopText').bind("click, touchstart", function(){
	$(window).scrollTop(0);
});

(function($) {

    jQuery(function() {

        if (jQuery('html').hasClass('touch')) {

            /* cache dom referencess */ 
            var $body = jQuery('body'); 

            /* bind events */
            jQuery(document)
            .on('focus', 'input', function(e) {
                console.log('focus on input');
                $body.addClass('fixfixed');
            })
            .on('blur', 'input', function(e) {
                console.log('blur out of input');
                $body.removeClass('fixfixed');
            });


        }

    });

})(jQuery);