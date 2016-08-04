var page1 = $('#page1').offset();
var page1Top = page1.top -90;

var page2 = $('#page2').offset();
var page2Top = page2.top -90;

var page3 = $('#page3').offset();
var page3Top = page3.top -90;

var page4 = $('#page4').offset();
var page4Top = page4.top -90;

var page5 = $('#page5').offset();
var page5Top = page5.top -90;

var page6 = $('#page6').offset();
var page6Top = page6.top -90;



// console.log("page1: "+page1Top+" page2: "+page2Top+" page3: "+page3Top+" page4: "+page4Top+" page5: "+page5Top+" page6: "+page6Top);

var rect = document.getElementsByTagName("body")[0].getClientRects();
console.log(rect);

var collection = document.getElementsByClassName("section");

for(var i = 0; i != collection.length; i++){
	console.log(getRects(collection[i]));
}

function getRects(elm){
	var ident = elm.id;
	var ret = document.getElementById(ident).getClientRects();
	var bottom = ret[0]['bottom'];
	var height = ret[0]['height'];
	console.log("bottom: "+bottom+ " height: "+height);
	return ret;
}
$('#topMenu li a').bind("click touchstart", function(event){
	event.preventDefault();
	var link = $(this).attr('href');
	$('a').removeClass("active");
	switch(link){
		case "#Home":
		$('html, body').stop().animate({
			scrollTop: page1Top
		}, 1000, 'linear');
		$(this).addClass('active');
		break;
		case "#WhatIsHypocare":
		$('html, body').stop().animate({
			scrollTop: page2Top
		}, 1000, 'linear');
		$(this).addClass('active');
		break;
		case "#Feedback":
		$('html, body').stop().animate({
			scrollTop: page4Top
		}, 1000, 'linear');
		$(this).addClass('active');
		break;
		case "#WhereToBuy":
		$('html, body').stop().animate({
			scrollTop: page5Top
		}, 1000, 'linear');
		$(this).addClass('active');
		break;
		case "#Contact":
		$('html, body').stop().animate({
			scrollTop: page6Top
		}, 1000, 'linear');
		$(this).addClass('active');
		break;
		default:
		return;
	}
});

// two arrows:
$('#nextPageButton').on("click", function(event){
	event.preventDefault();
	$('html, body').stop().animate({
			scrollTop: page2Top
		}, 1000, 'linear');
	$('a').removeClass("active");
	$('#topMenu li:first-child a').addClass("active");

});

$('#nextPageButtonTwo').on("click", function(event){
	event.preventDefault();
	$('html, body').stop().animate({
			scrollTop: page3Top
		}, 1000, 'linear');
	$('a').removeClass("active");
	$('#topMenu li:first-child a').addClass("active");
});

$('#nextPageButtonTwo').on("click", function(event){
	event.preventDefault();
	$('html, body').stop().animate({
			scrollTop: page3Top
		}, 1000, 'linear');
	$('a').removeClass("active");
	$('#topMenu li:first-child a').addClass("active");
});

$('#contactText').on("click", function(event){
	event.preventDefault();
	$('html, body').stop().animate({
			scrollTop: page6Top
		}, 1000, 'linear');
	$('a').removeClass("active");
	$('#topMenu li:last-child a').addClass('active');
});


$('#backToTop').on("click", function(){
	$('html, body').stop().animate({
			scrollTop: page1Top
		}, 1000, 'linear');
	$('a').removeClass("active");
});

$('#backToTopText').on("click", function(){
	$('html, body').stop().animate({
			scrollTop: page1Top
		}, 1000, 'linear');
	$('a').removeClass("active");
});

$('#homeMobile').on("click", function(){
	$('html, body').stop().animate({
			scrollTop: page1Top
		}, 1000, 'linear');
	$('a').removeClass("active");
});


$('#sendForm').bind("touchstart click", function(){
	$('#getFeedback').submit();
});

$('input, textarea').bind("click touchstart focus", function(){
	$(this).focus();
});



$('#getFeedback').on("submit", function(evt){
	evt.preventDefault();

	var data = $('#getFeedback').serialize();
	var processor = '/hypocare/includes/mail.php';

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
					$('.ajaxLoader').hide();
					setTimeout(function() { $("#errorArea").hide(); resetForm();}, 5000);
				}

			}else{
				$('#successArea').html(json.Mail).show();
				$('.ajaxLoader').hide();
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
	$('input, textarea').blur();
	document.getElementById("getFeedback").reset();
}


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