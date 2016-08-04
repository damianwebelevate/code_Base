<?php

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Hypocare Website - index.php</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<script src="js/jquery.js"></script>
	
</head>
<body>

<div id="menu">
	<div class="innerMenu">
		<ul class="hiddenMobile" id="topMenu">
			<li>
				<a title="What is Hypocare?" href="#secondPage">What is Hypocare</a>
			</li>
			<li>
				<a title="Feedback" href="#fourthPage">Feedback</a>
			</li>
			<li class="hiddenMobile">
				<a href="#firstPage" title="Home Page">
					<img id="firstPage" src="images/logo_svg.svg" title="Go Home" />
				</a>
			</li>
			<li>
				<a title="Where to buy" href="#fifthPage">Where to buy</a>
			</li>
			<li>
				<a title="Contact Us" href="#sixthPage">CONTACT</a>
			</li>
		</ul>
		<div class="hiddenDesktop" id="mobileMenuArea">
			<img style="display: block; width: 200px; margin: 10px auto 0 auto;" src="images/logo_svg.svg" id="homeMobile" />
		</div>
	</div>
</div><!-- close menu -->
<!-- side menu -->
<ul class="myMenu" id="sideMenu">
	<li>
		<a href="#firstPage" title="Home Page">
			<div id="homeTool" class="tooltip"><span class="tooltiptext">Home Page</span></div>
		</a>
	</li>
	<li>
		<a href="#secondPage" title="What is Hypocare?">
			<div id="firstTool" class="tooltip"><span class="tooltiptext">What is Hypocare</span></div>
		</a>
	</li>
	<li>
		<a href="#thirdPage" title="The Science">
			<div id="firstTool" class="tooltip"><span class="tooltiptext">The Science</span></div>
		</a>
	</li>
	<li>
		<a href="#fourthPage"  title="Feedback">
			<div id="secondTool" class="tooltip"><span class="tooltiptext">Feedback</span></div>
		</a>
	</li>
	<li>
		<a href="#fifthPage" title="Where to buy">
			<div id="thirdTool" class="tooltip"><span class="tooltiptext">Where to buy</span></div>
		</a>
	</li>
	<li>
		<a href="#sixthPage"  title="Contact">
			<div id="fourthTool" class="tooltip"><span class="tooltiptext">Contact</span></div>
		</a>
	</li>
</ul>

<div class="section"><a name="firstPage" id="firstPage"></a>
	<div class="inside">
		page 1
		<a href="#secondPage" title="What is Hypocare">
			<img src="images/arrow.png" id="nextPageButton" />
		</a>
	</div>
</div>
<div class="section"><a name="secondPage" id="secondPage"></a>
	<div class="inside">
		page 2
		<a href="#thirdPage" title="What is Hypocare">
			<img src="images/arrow.png" id="nextPageButtonTwo" />
		</a>
	</div>
</div>
<div class="section"><a name="thirdPage" id="thirdPage"></a>
	<div class="inside">
		page 3
	</div>
</div>
<div class="section"><a name="fourthPage" id="fourthPage"></a>
	<div class="inside">
		page 4
	</div>
</div>
<div class="section"><a name="fifthPage" id="fifthPage"></a>
	<div class="inside">
		page 5
	</div>
</div>
<div class="section"><a name="sixthPage" id="sixthPage"></a>
	<div class="inside">
		page 6
	</div>
</div>

<div id="text" style="display: none;"><img id="backUp" src="images/greyArrow2.png"></div>

<script type="text/javascript">
	
	(function($){

		var menuLinks = ['#firstPage', '#secondPage', '#thirdPage', '#fourthPage', '#fifthPage', '#sixthPage'];
		var delay = false;
		window.addEventListener('click', callGetCurrentPage);
		window.addEventListener('mousewheel', mouseWheelHandler);
  		window.addEventListener('DOMMouseScroll', mouseWheelHandler);
  		window.addEventListener('keydown', keyDownHandler);
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

			if(width < 960){
				$('.section').css("height", height);
				$('.inside').css("padding-top", menu+"px");
				$('#innerSectionA').css("height", height +"px");
				$('#sideMenu').css("margin-top", sMenuMargin +"px");
				$('#menu').css("width", width);
			}else{
				$('.section').css("height", height);
				$('.inside').css("padding-top", menu+"px");
				$('#innerSectionA').css("height", height +"px");
				$('#sideMenu').css("margin-top", sMenuMargin +"px");
				$('#menu').css("width", width);
			}
			
				var getCurrentHash = window.location.hash;
				var page = getPositionInArray(getCurrentHash);
				var href = window.location.href;
				switchPosition(page, href);

				getCurrentPage();
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

			if(width < 960){

				$('.section').css("height", height);
				$('.inside').css("padding-top", menu+"px");
				$('#innerSectionA').css("height", height +"px");
				$('#sideMenu').css("margin-top", sMenuMargin +"px");
				$('#menu').css("width", width);
			}else{

				$('.section').css("height",height);
				$('.inside').css("padding-top", menu+"px");
				$('#innerSectionA').css("height", height +"px");
				$('#sideMenu').css("margin-top", sMenuMargin +"px");
				$('#menu').css("width", width);
			}	
				var getCurrentHash = window.location.hash;
				var page = getPositionInArray(getCurrentHash);
				var href = window.location.href;
				switchPosition(page, href);

				getCurrentPage();
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
						return {"index" : 3, "location" : updatedString};
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
			// event.preventDefault();
			$("a").each(function(i, n){
				if($(n) != null){
					$(n).on("click", function(){
						if(delay) return false;
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

			if(delta >= 120){
    			dir = "up";
			}else if(delta <= -120){
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
			var location = location || "";
			var windowHeight = window.innerHeight;
			var firstPage = 0;
			var secondPage = windowHeight;
			var thirdPage = windowHeight * 2;
			var fourthPage = windowHeight *3;
			var fifthPage = windowHeight *4;
			var sixthPage = windowHeight *5;

			if(delay) return false;

			switch(page){
				case 0:
					delay = true;
					setTimeout(function(){
						window.scrollTo(0, firstPage);
						window.location.href = location;
						$('a').removeClass("active");
						$('#sideMenu li:first-child a').addClass("active");
						delay = false;
					}, 1000);
				break;
				case 1:
					delay = true;
					setTimeout(function(){
						window.scrollTo(0, secondPage);
						window.location.href = location;
						$('a').removeClass("active");
						$('#topMenu li:nth-child(1) a').addClass("active");
						$('#sideMenu li:nth-child(2) a').addClass("active");
						delay = false;
					}, 1000);
				break;
				case 2:
					delay = true;
					setTimeout(function(){
						window.scrollTo(0, thirdPage);
						window.location.href = location;
						$('a').removeClass("active");
						$('#topMenu li:nth-child(1) a').addClass("active");
						$('#sideMenu li:nth-child(3) a').addClass("active");
						delay = false;
					}, 1000);
				break;
				case 3:
					delay = true;
					setTimeout(function(){
						window.scrollTo(0, fourthPage);
						window.location.href = location;
						$('a').removeClass("active");
						$('#topMenu li:nth-child(2) a').addClass("active");
						$('#sideMenu li:nth-child(4) a').addClass("active");
						delay = false;
					}, 1000);
				break;
				case 4:
					delay = true;
					setTimeout(function(){
						window.scrollTo(0, fifthPage);
						window.location.href = location;
						$('a').removeClass("active");
						$('#topMenu li:nth-child(4) a').addClass("active");
						$('#sideMenu li:nth-child(5) a').addClass("active");
						delay = false;
					}, 1000);
				break;
				case 5:
					delay = true;
					setTimeout(function(){
						window.scrollTo(0, sixthPage);
						window.location.href = location;
						$('a').removeClass("active");
						$('#topMenu li:nth-child(5) a').addClass("active");
						$('#sideMenu li:nth-child(6) a').addClass("active");
						delay = false;
					}, 1000);
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
	  		
	  		if(delay) return false;

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
	  	function hashChangeHandler(event){
	  		var getCurrentHash = window.location.hash;
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

			// ipad landscape window.innerHeight === 704;
			// innerHeight - menu 90 === 614;
			if(diff < 614){
				// alert(window.innerHeight);
				$('.section').each(function(i,n){
					$(n).toggleClass("section");
				});
			}

			return {"menu": menu, "diff" : diff, "sectionHeight" : sectionHeight, "width" : width, "actualHeight": actualHeight};
		}


	})(jQuery);
</script>
</body>
</html>