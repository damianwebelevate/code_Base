/* ==========================================================================
    BREADCRUMB APPLICATION NAVIGATION
========================================================================== */

$j('#backToColors').on("mouseenter", function(){
    $j('#backToColorsNumber').css({"background-color":"#eee", "border-color":"#eee"});
    $j('#backToColorsText').css("color", "#eee");
});

$j('#backToColors').on("mouseleave", function(){
    $j('#backToColorsNumber').css({"background-color":"#0D416E", "border-color":"#0D416E"});
    $j('#backToColorsText').css("color", "#0D416E");
});

$j('#closeStepOneUserGuide').on("click", function(){
    $j('#stepOneUserGuide').hide();
});


/* ==========================================================================
	MOUSE OVER FOR THE IMAGE MOVEMENT
========================================================================== */
// mouseover event to drigger the image draggable for holywood
$j('#neckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#hollywoodNeckRegionImageHolder',
        scroll: false
    });
    $j('#neckRegionImage img').css("margin-top","0");
});

// mouseover event to drigger the image draggable for holywood

$j('#hollywoodNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
    $j('#neckRegionImage img').css("margin-top","0");
});

// mouseover event to drigger the image draggable for pimlico
$j('#pimlicoNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
    $j('#pimlicoNeckRegionImage img').css("margin-top","0");
});
// mouseover event to drigger the image draggable for extended
$j('#extendedNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
});
// mouseover event to drigger the image draggable for belmont
$j('#belmontNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
});
// mouseover event to drigger the image draggable for santa
$j('#santaNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#santaNeckRegionImageHolder',
        scroll: false
    });
});
// mouseover event to drigger the image draggable for GULF
$j('#gulfNeckRegionImage img').on("mouseover", function(){
    $j(this).draggable({
        containment: '#neckRegionImageHolder',
        scroll: false
    });
});
$j('#shoulderRegionImageHolder').on("mouseover", function(){
    $j('#shoulderRegionImage').draggable({
        containment: '#shoulderRegionImageHolder',
        scroll: false
    });
});
$j('#hipRegionImageHolder').on("mouseover", function(){
    $j('#hipRegionImage').draggable({
        containment: '#hipRegionImageHolder',
        scroll: false
    });
});
/* ==========================================================================
    OPENING CLOSING EVENTS
========================================================================== */
    // open the area under the title NECK

    $j('#specialRequests').on("click", function(){
        $j('#specialRequestsHidden').toggle();
        $j(this).toggleClass("boxContainerGold");
        $j('#speicalRequestsHeadingIcon').toggleClass("boxHeadingIconMinus");
    });

    $j('#requestText').keyup(function(e){


        var keysArr = Array();

        var y = $j(this).html();

        keysArr[0] = y;

        $j('#hiddenMessageArea').html(keysArr);

        $j('#rugCustomMessage').val($j('#hiddenMessageArea').text());


    });


// stop refresh of page:

// var submitted = false;
// $(document).ready(function () {
//     window.onbeforeunload = function (e) {
//         if (!submitted) {
//             var message = "Leaving this page will cause you to loose all of your embroidery changes you made", e = e || window.event;
//             if (e) {
//                 e.returnValue = message;
//             }
//             return message;
//         }
//     }
//     window.unload = function (e){
//     	if (!submitted) {
//             var message = "Leaving this page will cause you to loose all of your embroidery changes you made", e = e || window.event;
//             if (e) {
//                 e.returnValue = message;
//             }
//             return message;
//         }
//     }
//  	$("form").submit(function() {
//      	submitted = true;
//     });


// });

(function(){
	var elem = document.querySelectorAll("input[type=button]");
	// console.log(elem);
	for(var i = 0; i <= elem.length-1; i++){
		elem[i].addEventListener("click", function(event){
			var iframe = "";
			var string = event.target.id;
			var hideMe = document.getElementById("initial");
			switch(string){
				case "Neck":
				iframe = "neckIframeHolder";
				document.getElementById(iframe).style.display = "block";
				var source = document.getElementById(iframe).src;
				hideMe.style.display = "none";
				break;
				case "Shoulder":
				iframe = "shoulderIframeHolder";
				document.getElementById(iframe).style.display = "block";
				hideMe.style.display = "none";
				break;
				case "Hip":
				iframe = "hipIframeHolder";
				document.getElementById(iframe).style.display = "block";
				hideMe.style.display = "none";
				break;
				case "Center":
				iframe = "centerIframeHolder";
				document.getElementById(iframe).style.display = "block";
				hideMe.style.display = "none";
				break;
				case "clearNeck":
				iframe = "neckIframeHolder";
				var sourceImage = document.getElementById('neckEmbroideryImage').src;
				document.getElementById('neckEmbroideryImage').src = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
				var source = $j('#neckIframeHolder iframe').attr("src");
				$j('#neckIframeHolder iframe').attr("src", source);

				var data = $j('#deleteNeckForm').serialize();

				$j.ajax({
					url: 'http://localhost/fromSite/controller/delete.php',
					data: data,
					method: 'POST'
				}).done(function(json){
					// do nothing
					console.log(json.Deleted);
				});

				break;
				case "clearShoulder":
				iframe = "shoulderIframeHolder";
				document.getElementById('shoulderEmbroideryImage').src = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
				var source = $j('#shoulderIframeHolder iframe').attr("src");
				$j('#shoulderIframeHolder iframe').attr("src", source);

				var data = $j('#deleteShoulderForm').serialize();
				$j.ajax({
					url: 'http://localhost/fromSite/controller/delete.php',
					data: data,
					method: 'POST'
				}).done(function(json){
					// do nothing
					console.log(json.Deleted);
				});

				break;
				case "clearHip":
				iframe = "hipIframeHolder";
				document.getElementById('hipEmbroideryImage').src = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
				var source = $j('#hipIframeHolder iframe').attr("src");
				$j('#hipIframeHolder iframe').attr("src", source);

				var data = $j('#deleteHipForm').serialize();
				$j.ajax({
					url: 'http://localhost/fromSite/controller/delete.php',
					data: data,
					method: 'POST'
				}).done(function(json){
					// do nothing
					console.log(json.Deleted);
				});

				break;
				case "clearCenter":
				iframe = "centerIframeHolder";
				document.getElementById('centerEmbroideryImage').src = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
				var source = $j('#centerIframeHolder iframe').attr("src");
				$j('#centerIframeHolder iframe').attr("src", source);

				var data = $j('#deleteCenterForm').serialize();
				$j.ajax({
					url: 'http://localhost/fromSite/controller/delete.php',
					data: data,
					method: 'POST'
				}).done(function(json){
					// do nothing
					console.log(json.Deleted);
				});

				break;
				case "closeUserGuide":
				document.getElementById('userGuide').style.display = "none";
				break;

			}
		});
	}

	var x = document.getElementById('backToColors');
	x.addEventListener("click", function(evt){
		document.getElementById('initial').style.display = "none";
		document.getElementById('chooseColors').style.display = "block";
	});



})();