(function($){

	var menuLinks = ['#Home', '#WhatIsHypocare', '#TheScience', '#Feedback', '#WhereToBuy', '#Contact'];
	// var delay = false;
	$(window).on("click", callGetCurrentPage);
	$('#topMenu, #sideMenu').bind("touchstart", callGetCurrentPage);
	window.addEventListener('mousewheel', mouseWheelHandler);
	window.addEventListener('DOMMouseScroll', mouseWheelHandler);
	window.addEventListener('keydown', keyDownHandler);
	window.addEventListener("load", loading);
	// window.addEventListener('hashchange', hashChangeHandler);
	// window.addEventListener('hashchange', hashChangeHandler);

	function loading(){
		var x = getWindow();
		var height = x.actualHeight;
		var width = x.width;
		var diff = x.diff;
		var menu = x.menu;
		var sMenu = $('#sideMenu').height();
		var sMenuMargin = (height - sMenu) / 2;
		var half = x.actualHeight/2;

		$('.section').css("height", height);
		$('.inside').css({"height": diff, "padding-top": menu+"px"});
		$('#innerSectionA').css("height", height +"px");
		$('#sideMenu').css("margin-top", sMenuMargin +"px");
		$('#menu').css("width", width);

		var getCurrentHash = window.location.hash || "#firstPage";
		var page = getPositionInArray(getCurrentHash);
		var href = "";
		var page = getCurrentPage();
		switchPosition(page, getCurrentHash);

	}



	$(window).on("resize", function(){

		var x = getWindow();
		var height = x.actualHeight;
		var width = x.width;
		var diff = x.diff;
		var menu = x.menu;
		var sMenu = $('#sideMenu').height();
		var sMenuMargin = (height - sMenu) / 2;
		var half = x.actualHeight/2;

		$('.section').css("height",height);
		$('.inside').css({"height": diff, "padding-top": menu+"px"});
		$('#innerSectionA').css("height", height +"px");
		$('#sideMenu').css("margin-top", sMenuMargin +"px");
		$('#menu').css("width", width);

		var getCurrentHash = window.location.hash || "#Home";
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
			window.location.href = '#Home';
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

		// if(delay) return false;

		switch(page){
			case 0:
				// delay = true;
				// setTimeout(function(){
				// 	window.scrollTo(0, firstPage);
				// 	window.location.href = location;
				// 	$('a').removeClass("active");
				// 	$('#sideMenu li:first-child a').addClass("active");
				// 	delay = false;
				// }, 500);

				$('html, body').stop().animate({
					scrollTop: firstPage
				}, 1000, 'easeInOutQuint', function(){
					window.location.href = location;
					$('a').removeClass("active");
					$('#sideMenu li:first-child a').addClass("active");
				});
				
			break;
			case 1:
				// delay = true;
				// setTimeout(function(){
				// 	var offset = document.getElementById("secondPage").offsetTop;
				// 	console.log(offset +" page2: "+secondPage+" scrollSpy: "+$(window).scrollTop());
				// 	window.scrollTo(0, secondPage);
				// 	window.location.href = location;
				// 	$('a').removeClass("active");
				// 	$('#topMenu li:nth-child(1) a').addClass("active");
				// 	$('#sideMenu li:nth-child(2) a').addClass("active");
					// delay = false;
				// }, 500);

				$('html, body').stop().animate({
					scrollTop: secondPage
				}, 1000, 'easeInOutQuint', function(){
					window.location.href = location;
					$('a').removeClass("active");
					$('#topMenu li:nth-child(1) a').addClass("active");
					$('#sideMenu li:nth-child(2) a').addClass("active");
				});

				

			break;
			case 2:
				// delay = true;
				// setTimeout(function(){
				// 	window.scrollTo(0, thirdPage);
				// 	window.location.href = location;
				// 	$('a').removeClass("active");
				// 	$('#topMenu li:nth-child(1) a').addClass("active");
				// 	$('#sideMenu li:nth-child(3) a').addClass("active");
					// delay = false;
				// }, 500);

				$('html, body').stop().animate({
					scrollTop: thirdPage
				}, 1000, 'easeInOutQuint', function(){
					window.location.href = location;
					$('a').removeClass("active");
					$('#topMenu li:nth-child(1) a').addClass("active");
					$('#sideMenu li:nth-child(3) a').addClass("active");
				});

				

			break;
			case 3:
				// delay = true;
				// setTimeout(function(){
				// 	window.scrollTo(0, fourthPage);
				// 	window.location.href = location;
				// 	$('a').removeClass("active");
				// 	$('#topMenu li:nth-child(2) a').addClass("active");
				// 	$('#sideMenu li:nth-child(4) a').addClass("active");
					// delay = false;
				// }, 500);

				$('html, body').stop().animate({
					scrollTop: fourthPage
				}, 1000, 'easeInOutQuint', function(){
					window.location.href = location;
					$('a').removeClass("active");
					$('#topMenu li:nth-child(2) a').addClass("active");
					$('#sideMenu li:nth-child(4) a').addClass("active");
				});

				

			break;
			case 4:
				// delay = true;
				// setTimeout(function(){
				// 	window.scrollTo(0, fifthPage);
				// 	window.location.href = location;
				// 	$('a').removeClass("active");
				// 	$('#topMenu li:nth-child(4) a').addClass("active");
				// 	$('#sideMenu li:nth-child(5) a').addClass("active");
					// delay = false;
				// }, 500);

				$('html, body').stop().animate({
					scrollTop: fifthPage
				}, 1000, 'easeInOutQuint', function(){
					window.location.href = location;
					$('a').removeClass("active");
					$('#topMenu li:nth-child(4) a').addClass("active");
					$('#sideMenu li:nth-child(5) a').addClass("active");
				});
				

			break;
			case 5:
				// delay = true;
				// setTimeout(function(){
				// 	window.scrollTo(0, sixthPage);
				// 	window.location.href = location;
				// 	$('a').removeClass("active");
				// 	$('#topMenu li:nth-child(5) a').addClass("active");
				// 	$('#sideMenu li:nth-child(6) a').addClass("active");
					// delay = false;
				// }, 500);

				$('html, body').stop().animate({
					scrollTop: sixthPage
				}, 1000, 'easeInOutQuint', function(){
					window.location.href = location;
					$('a').removeClass("active");
					$('#topMenu li:nth-child(5) a').addClass("active");
					$('#sideMenu li:nth-child(6) a').addClass("active");
				});
				

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
  					switchPosition(nextPage.index, '#Home');
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
  	function hashChangeHandler(page, ref){

		var getCurrentHash = window.location.hash;
		if(!getCurrentHash){
			page = "#Home";
		}
		var page = getPositionInArray(getCurrentHash);
		var href = window.location.href;
		switchPosition(page, href);
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

		if(actualHeight == 704){
			actualHeight = 768;
		}

		return {"menu": menu, "diff" : diff, "sectionHeight" : sectionHeight, "width" : width, "actualHeight": actualHeight};
	}


var ts;
$(window).bind('touchstart', function (event){
   ts = event.originalEvent.touches[0].clientY;
});

$(window).bind('touchend', function (event){
   var te = event.originalEvent.changedTouches[0].clientY;
   var tag = event.target.tagName.toLowerCase();

	   if(ts > te+5){
	      	goDown();
	   	}else if(ts < te-5){
	      	goUp();
	   	}else{
			return true;
		}
});

function goDown(){
	var tag = event.target.tagName.toLowerCase();
	var dir = "down";
	var currentPage = getCurrentPage();
	var nextPage = getNextPositionInArray(currentPage, dir);
	switchPosition(nextPage.index, nextPage.location);
}

function goUp(){
	var tag = event.target.tagName.toLowerCase();
	var dir = "up";
	var currentPage = getCurrentPage();
	var nextPage = getNextPositionInArray(currentPage, dir);
	switchPosition(nextPage.index, nextPage.location);
}


})(jQuery);

$('#sendForm').bind("touchstart click", function(){
	$('#getFeedback').submit();
});

$('input, textarea').bind("click touchstart focus", function(){
	$(this).focus();
});



$('#getFeedback').on("submit", function(evt){
	evt.preventDefault();

	var data = $('#getFeedback').serialize();
	var processor = '/hypocare/site2016/includes/mail.php';
	// var processor = 'http://dev.triplecrowncustom.com/hypo/includes/mail.php';
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
					setTimeout(function() { $("#errorArea").hide(); resetForm();}, 5000);
				}

			}else{
				$('#successArea').html(json.Mail).show();
				setTimeout(function() { $("#successArea").hide(); resetForm();}, 5000);
			}
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
	$('#sendForm').removeAttr("disabled");
	$('.ajaxLoader').hide();
	$('input, textarea').blur();
	document.getElementById("getFeedback").reset();
}

$('#mobileMenuOpen').on("click", function(evt){
	$('#mobileMenu').toggle();
});

$('.bottomToTop').bind("click touchstart", function(){
	$(window).scrollTop(0);
});


(function($) {

    jQuery(function() {

        if (jQuery('html').hasClass('touch')) {

        	alert("it does");
            /* cache dom referencess */ 
            var $body = jQuery('body'); 

            /* bind events */
            jQuery(document)
            .on('focus', 'input', function(e) {
                $body.addClass('fixfixed');
            })
            .on('blur', 'input', function(e) {
                $body.removeClass('fixfixed');
            });
        }

    });

})(jQuery);