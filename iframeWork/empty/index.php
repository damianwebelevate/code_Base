<?php

require dirname(__FILE__).'/regions/inc/resources.php';

session_start();

$sessionID = session_id();

$posted = "";

if(!empty($_POST['product_selected'])){
	$posted = $_POST['product_selected'];
	$_SESSION['blanketName'] = $posted;
}


// var_dump($_POST);
$rug = $posted ? $_SESSION['blanketName'] : "One of the Blankets";

$area = "Choose Embroidery";

// no add text page - just an image from the server to display when opening page 
$imageSource = isset($_SESSION['imageJoined']) ? $_SESSION['imageJoinded'] : "none";

$neckDefaultImage = isset($_SESSION['embroidery_neck']) ? $_SESSION['embroidery_neck'] : "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
$shoulderDefaultImage = isset($_SESSION['embroidery_shoulder']) ? $_SESSION['embroidery_shoulder'] : "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
$hipDefaultImage = isset($_SESSION['embroidery_hip']) ? $_SESSION['embroidery_hip'] : "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
$centerDefaultImage = isset($_SESSION['embroidery_center']) ? $_SESSION['embroidery_center'] : "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";


// session data:
$rugColor = isset($_SESSION['bodyColor']) ? $_SESSION['bodyColor'] : "navy";
$binding = isset($_SESSION['bindingColor']) ? $_SESSION['bindingColor'] : "white";
$piping = isset($_SESSION['pipingColor']) ? $_SESSION['pipingColor'] : "silvergrey";

$rotateClass = "";
switch($rug){

	case "One of the Blankets":
	$class = "not-set";
	break;

	case "Gulfstream net cooler":
	$rotateClass = 'pimlicoRotate some';
	$rotate = 'class="gulfRotate gulfNeckRegionImageHolder"';
	$neck = 		'<!-- Pimlico Neck Region on Rug -->
					<div id="neckRegionImageHolder" '.$rotate.'>
						<div id="pimlicoNeckRegionImage">
							'.$neckDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- Pimlico Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="pimlicoShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- Pimlico Center Region on Rug -->
					<div id="centerRegionImageHolder" class="pimlicoCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- Pimlico Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="pimlicoHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$price = '169.00';
	$class = 'class="gulfAdj"';
	break;
	case "Santa Anita Stable Sheet":
	$rotateClass = "santaRotateToAdd";
	$rotate = 'class="santaRotate santaNeckRegionImageHolder"';
	$neck = 		'<!-- Pimlico Neck Region on Rug -->
					<div id="neckRegionImageHolder" '.$rotate.'>
						<div id="santaNeckRegionImage">
							'.$neckDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- Pimlico Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="santaShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- Pimlico Center Region on Rug -->
					<div id="centerRegionImageHolder" class="santaCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- Pimlico Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="santaHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	
	$price = '189.00';
	$class = 'class="santaAdj"';
	break;
	case "200g Belmont Stable Rug":
	$rotateClass = "belmontTwoRotateToAdd";
	$rotate = 		'class="belmontTwoRotate belmontNeckRegionImageHolder"';
	$neck = 		'<!-- belmont Neck Region on Rug -->
					<div id="belmontNeckRegionImageHolder" '.$rotate.'>
						<div id="belmontNeckRegionImage">
							'.$neckDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- belmont Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="belmontShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- belmont Center Region on Rug -->
					<div id="centerRegionImageHolder" class="belmontCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- belmont Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="belmontHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	
	$price = '249.00';
	$class = 'class="gulfAdj"';
	break;
	case "Extended Neck Lined Rain Sheet":
	$rotateClass = 'extendedRotateToAdd';
	$rotate = 'class="extendedRotate extendedNeckRegionImageHolder"';
	$neck = 		'<!-- extended Neck Region on Rug -->
					<div id="neckRegionImageHolder" '.$rotate.'>
						<div id="extendedNeckRegionImage">
							'.$neckDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- extended Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="extendedShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- extended Center Region on Rug -->
					<div id="centerRegionImageHolder" class="extendedCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- extended Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="extendedHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	
	$price = '179.00';
	$class = 'class="santaAdj"';
	break;
	case "Pimlico Wool Dress Sheet":
	$rotateClass = 'pimlicoRotate';
	$rotate = 'class="pimlicoRotate pimlicoNeckRegionImageHolder"';
	$neck = 		'<!-- Pimlico Neck Region on Rug -->
					<div id="neckRegionImageHolder" '.$rotate.'>
						<div id="pimlicoNeckRegionImage">
							'.$neckDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- Pimlico Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="pimlicoShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- Pimlico Center Region on Rug -->
					<div id="centerRegionImageHolder" class="pimlicoCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- Pimlico Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="pimlicoHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$price = '295.00';
	$class = 'class="gulfAdj"';
	break;
	case "Hollywood cotton cooler":

	$rotateClass = 'pimlicoRotate';
	$rotate = 'class="pimlicoRotate hollywoodNeckRegionImageHolder"';
	$neck = 		'<!-- Pimlico Neck Region on Rug -->
					<div id="neckRegionImageHolder" '.$rotate.'>
						<div id="pimlicoNeckRegionImage">
							'.$neckDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';

	$shoulder = 	'<!-- hollywood stream Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="hollywoodShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- hollywood stream Center Region on Rug -->
					<div id="centerRegionImageHolder" class="hollywoodCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- hollywood stream Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="hollywoodHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipDefaultImage.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$price = '145.00';
	$class = 'class="gulfAdj"';
	break;
}
/* 	==========================================================================
		Main Content
	==========================================================================
*/
$mainContent = 			'<div class="divForCanvasMain">
							<!-- fifty across with four divisions -->
							<div id="aRegion" class="divForCanvasFifty">
								<div class="divForCanvasFiftyHundred">
									<!-- A region a -->
									<!-- empty -->
								</div>
								
								<div id="ad" class="divForCanvasFiftyHundred">
									<!-- A region d -->
									<!-- Front Region on Rug -->
									<!-- variable position based on rug selection -->
									'.$neck.'
									
								</div>
							</div>
							<div id="bRegion" class="divForCanvasFifty">
								<div class="divForCanvasHundred">
									<!-- B region a -->
								</div>
								<div class="divForCanvasFifty">
									<!-- B region b -->
									'.$center.'
								</div>
								<div class="divForCanvasFifty">
									<!-- B region b -->
									'.$hip.'
								</div>
							</div>
						<img id="addEmbroideryImage" data="show" src="" class="image">
							<div id="cRegion" class="divForCanvasFifty">
								<div class="divForCanvasFiftyHundred">
									<!-- C region a -->
								</div>
								<div class="divForCanvasFiftyHundred">
									<!-- C region b -->
									'.$shoulder.'
								</div>
							</div>
							<div id="dRegion" class="divForCanvasFifty">
								<div class="divForCanvasFifty">
									<!-- D region a -->
								</div>
								<div class="divForCanvasFifty">
									<!-- D region b -->
								</div>
								<div class="divForCanvasFifty">
									<!-- D region c -->
								</div>
								<div class="divForCanvasFifty">
									<!-- D region d -->
								</div>
							</div>
						</div><!-- div that contains four main blocks -->';

$specialRequests = '	<div style="width: 95%; margin: 0 auto;">
							<p>Please use the message box below to send us any special requests that you may have for your custom rug.</p>
							<h3>Message:</h3>
							<p contenteditable="true" id="requestText"></p>
							<p style="visibility: hidden;" id="hiddenMessageArea"></p>
						</div>';	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Open Close iframe</title>
	<?php echo $head; ?>

</head>
<body>
<section class="container-fluid navy2">
	<div class="row">
		<div class="col-lg-4">
		</div>
		<div class="col-lg-4">
			<img class="imageHeader" src="http://triplecrowncustom.com/wp-content/themes/triple/img/tcc-logo.png" alt="Triple Crown Custom">
		</div>
		<div class="col-lg-4">
		</div>
	</div><!-- //// close row -->
</section><!-- //// header section -->
<section class="container-fluid gold">
	<div class="row">
		<div class="wrapper">
			some kind of bar for the menu
		</div><!-- //// close parent wrapper -->
	</div>
</section><!-- //// menu section -->

<!-- // this is the hidden area for the iframes to populate into the dom -->
<div id="replaceMe">

<?php echo $embroideryMessage; ?>

<!-- Neck Iframe -->
<div id="neckIframeHolder" class="holderIframe" style="display: none;">
	<iframe src="http://dev.triplecrowncustom.com/app/regions/neckRegion.php" class="iframeWindow"></iframe>
</div>
<!-- Shoulder Iframe -->
<div id="shoulderIframeHolder" class="holderIframe" style="display: none;">
	<iframe src="http://dev.triplecrowncustom.com/app/regions/shoulderRegion.php" class="iframeWindow"></iframe>
</div>
<!-- Hip Iframe -->
<div id="hipIframeHolder" class="holderIframe" style="display: none;">
	<iframe src="http://dev.triplecrowncustom.com/app/regions/hipRegion.php" class="iframeWindow"></iframe>
</div>
<!-- Center Iframe -->
<div id="centerIframeHolder" class="holderIframe" style="display: none;">
	<iframe src="http://dev.triplecrowncustom.com/app/regions/centerRegion.php" class="iframeWindow"></iframe>
</div>
<!-- // choose colors is the first on display -->
<div id="chooseColors" class="holderIframe">
	<iframe src="http://dev.triplecrowncustom.com/app/regions/rugPage.php" class="iframeWindow"></iframe>
</div><!-- //// close parent wrapper -->

<div class="wrapper wrapperMobile" style="display: none;" id="initial">
	
	<input id="className" type="hidden" value="<?php echo $rotateClass; ?>" />

	<form id="goForth" method="post" action="http://dev.triplecrowncustom.com/dev/new-order-summary">
		<textarea style="display: none;" id="afterCanvasToImage" name="afterCanvasToImage"></textarea>
		<input type="text" name="rugCustomMessage" id="rugCustomMessage" value="Null" />
		<input type="text" value="<?php echo $price; ?>" name="price" />
		<!-- // send over the blanket color | piping color | binding color -->
		<input type="text" name="blanketFromText" value="<?php echo $rugColor;?>" />
		<input type="text" name="bindingFromText" value="<?php echo $binding;?>" />
		<input type="text" name="pipingFromText" value="<?php echo $piping;?>" />
	</form>
<!-- ========================================================================================================================
#																															#
#																															#
#												top of page menu 															#
#																															#
#																															#
========================================================================================================================= -->
	<article>
		<div class="container">
			<div class="row">
				<header>
					<?php echo "<h1 class='title'><span></span>".$rug." </h1>";?>
				</header>
			</div><!-- //// close row -->
		</div><!-- //// close container -->
<!-- ========================================================================================================================
#																															#
#																															#
#												breadcrumb        															#
#																															#
#																															#
========================================================================================================================= -->
		<div class="container">
			<div class="row">
				<?php echo $addTextBreadCrumb; ?>
			</div><!-- //// close row -->
		</div><!-- //// close bread crumb -->
		<form method="post" action="goToThisPage.php" >
			<input id="post" type="submit" value="next page" />
		</form>
		<h2><?php echo $sessionID; ?></h2>
		<div style="display: none;">
			<!-- forms for submitting a delete value for each region -->
			<form method="post" id="deleteNeckForm" action="http://dev.triplecrowncustom.com/app/controller/delete.php">
				<input type="hidden" name="Delete_Neck" value="Delete Neck" />
			</form>
			<form method="post" id="deleteCenterForm" action="http://dev.triplecrowncustom.com/app/controller/delete.php">
				<input type="hidden" name="Delete_Center" value="Delete Center" />
			</form>
			<form method="post" id="deleteShoulderForm" action="http://dev.triplecrowncustom.com/app/controller/delete.php">
				<input type="hidden" name="Delete_Shoulder" value="Delete Shoulder" />
			</form>
			<form method="post" id="deleteHipForm" action="http://dev.triplecrowncustom.com/app/controller/delete.php">
				<input type="hidden" name="Delete_Hip" value="Delete Hip" />
			</form>
		</div>

		<table>
			<thead>
				<tr>
					<th colspan="4">
						Region Selection: 
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Neck</td>
					<td><input type="button" value="Neck" id="Neck" /></td>
					<td><img class="backFromEmbroidery" src="<?php echo $neckDefaultImage; ?>" id="neckEmbroideryImage" /></td>
					<td><input type="button" value="Clear Neck" id="clearNeck" /></td>
				</tr>
				<tr>
					<td>Shoulder</td>
					<td><input type="button" value="Shoulder" id="Shoulder" /></td>
					<td><img class="backFromEmbroidery" src="<?php echo $shoulderDefaultImage; ?>" id="shoulderEmbroideryImage" /></td>
					<td><input type="button" value="Clear Shoulder" id="clearShoulder" /></td>				
				</tr>
				<tr>
					<td>Hip</td>
					<td><input type="button" value="Hip" id="Hip" /></td>
					<td><img class="backFromEmbroidery" src="<?php echo $hipDefaultImage; ?>" id="hipEmbroideryImage" /></td>
					<td><input type="button" value="Clear Hip" id="clearHip" /></td>				
				</tr>
				<tr>
					<td>Center</td>
					<td><input type="button" value="Center" id="Center" /></td>
					<td><img class="backFromEmbroidery" src="<?php echo $centerDefaultImage; ?>" id="centerEmbroideryImage" /></td>
					<td><input type="button" value="Clear Center" id="clearCenter" /></td>				
				</tr>
			</tbody>
			<tfoot>
			</tfoot>
		</table>





<div class="sidebar" id="sidebar">sidebar content
<div id="fromServer"></div>
</div>
<div class="maincontent" id="maincontentTwo">
main main content
<img src="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png" id="addEmbroideryImage" />
</div>

</div><!-- //// close initial wrapper -->




<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>

<script type="text/javascript">
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
					url: 'http://dev.triplecrowncustom.com/app/controller/delete.php',
					data: data,
					method: 'POST'
				}).done(function(json){
					// do nothing
				});

				break;
				case "clearShoulder":
				iframe = "shoulderIframeHolder";
				document.getElementById('shoulderEmbroideryImage').src = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
				var source = $j('#shoulderIframeHolder iframe').attr("src");
				$j('#shoulderIframeHolder iframe').attr("src", source);

				var data = $j('#deleteShoulderForm').serialize();
				$j.ajax({
					url: 'http://dev.triplecrowncustom.com/app/controller/delete.php',
					data: data,
					method: 'POST'
				}).done(function(json){
					// do nothing
				});

				break;
				case "clearHip":
				iframe = "hipIframeHolder";
				document.getElementById('hipEmbroideryImage').src = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
				var source = $j('#hipIframeHolder iframe').attr("src");
				$j('#hipIframeHolder iframe').attr("src", source);

				var data = $j('#deleteHipForm').serialize();
				$j.ajax({
					url: 'http://dev.triplecrowncustom.com/app/controller/delete.php',
					data: data,
					method: 'POST'
				}).done(function(json){
					// do nothing
				});

				break;
				case "clearCenter":
				iframe = "centerIframeHolder";
				document.getElementById('centerEmbroideryImage').src = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
				var source = $j('#centerIframeHolder iframe').attr("src");
				$j('#centerIframeHolder iframe').attr("src", source);

				var data = $j('#deleteCenterForm').serialize();
				$j.ajax({
					url: 'http://dev.triplecrowncustom.com/app/controller/delete.php',
					data: data,
					method: 'POST'
				}).done(function(json){
					// do nothing
				});

				break;
				case "closeUserGuide":
				document.getElementById('userGuide').style.display = "none";
				break;

			}
		});
	}

	var x = document.getElementById('getColors');
	x.addEventListener("click", function(evt){
		document.getElementById('initial').style.display = "none";
		document.getElementById('chooseColors').style.display = "block";
	});



})();


</script>

<script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/generalJS.js"></script>

</body>
</html>

