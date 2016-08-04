<?php
require dirname(__FILE__).'/includes/indexIncludes.php';

$posted = "";

if(!empty($_POST['product_selected'])){
	$posted = $_POST['product_selected'];
	$_SESSION['blanketName'] = $posted;
	unset($_POST['product_selected']);
}

$sessionBlanket = isset($_SESSION['blanketName']) ? $_SESSION['blanketName'] : "One of the Blankets";

$rug = $posted ? $sessionBlanket : "One of the Blankets";

switch($rug){

	case "One of the Blankets":
	$class = "not-set";
	session_destroy();
	session_regenerate_id(true);
	header("location: http://localhost/access/");
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
			<?php echo $menu; ?>
		</div><!-- //// close parent wrapper -->
	</div>
</section><!-- //// menu section -->

<!-- // this is the hidden area for the iframes to populate into the dom -->
<div id="replaceMe">
<?php echo $embroideryMessage; ?>
<?php echo $stepOneUserGuide; ?>
<!-- Neck Iframe -->
<div id="neckIframeHolder" class="holderIframe" style="display: none;">
	<iframe src="http://localhost/fromSite/views/neckRegion.php" class="iframeWindow"></iframe>
</div>
<!-- Shoulder Iframe -->
<div id="shoulderIframeHolder" class="holderIframe" style="display: none;">
	<iframe src="http://localhost/fromSite/views/shoulderRegion.php" class="iframeWindow"></iframe>
</div>
<!-- Hip Iframe -->
<div id="hipIframeHolder" class="holderIframe" style="display: none;">
	<iframe src="http://localhost/fromSite/views/hipRegion.php" class="iframeWindow"></iframe>
</div>
<!-- Center Iframe -->
<div id="centerIframeHolder" class="holderIframe" style="display: none;">
	<iframe  src="http://localhost/fromSite/views/centerRegion.php" class="iframeWindow"></iframe>
</div>
<!-- Order Summary -->
<div class="holderIframe" id="orderSummary" style="display: none;">
	<iframe  src="http://localhost/fromSite/views/orderSummary.php" class="iframeWindow"></iframe>
</div>
<!-- // choose colors is the first on display -->
<div id="chooseColors" class="holderIframe">
	<iframe src="http://localhost/fromSite/views/chooseColors.php" class="iframeWindow"></iframe>
</div><!-- //// close parent wrapper -->

<div class="wrapper wrapperMobile" style="display: none;" id="initial">
	
	<input id="className" type="hidden" value="<?php echo $rotateClass; ?>" />

	<form id="goForth" name="goForth" method="post" action="http://localhost/fromSite/controller/orderSummaryController.php">
		<input type="hidden" id="afterCanvasToImage" name="afterCanvasToImage" />
		<input type="hidden" name="rugCustomMessage" id="rugCustomMessage" value="Null" />
		<input type="hidden" value="<?php echo $price; ?>" name="price" />
		<!-- // send over the blanket color | piping color | binding color -->
		<input type="hidden" id="blanketFromText" name="blanketFromText" value="<?php echo $rugColor;?>" />
		<input type="hidden" id="bindingFromText" name="bindingFromText" value="<?php echo $binding;?>" />
		<input type="hidden" id="pipingFromText" name="pipingFromText" value="<?php echo $piping;?>" />
		<input type="hidden" id="blanketForShow" name="blanketForShow" value="" />
		<input type="hidden" id="pipingForShow" name="pipingForShow" value="" />
		<input type="hidden" id="bindingForShow" name="bindingForShow" value="" />
		<input type="hidden" id="blanketName" name="blanketName" value="" />
		<input type="hidden" id="imageSource" name="imageSource" value="" />
		<input type="hidden" id="pathToFile" name="pathToFile" value="" />
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
		<div style="display: block;">
			<!-- forms for submitting a delete value for each region -->
			<form method="post" id="deleteNeckForm" action="<?php echo BASE_URI;?>controller/delete.php">
				<input type="hidden" name="Delete_Neck" value="Delete Neck" />
			</form>
			<form method="post" id="deleteCenterForm" action="<?php echo BASE_URI;?>controller/delete.php">
				<input type="hidden" name="Delete_Center" value="Delete Center" />
			</form>
			<form method="post" id="deleteShoulderForm" action="<?php echo BASE_URI;?>controller/delete.php">
				<input type="hidden" name="Delete_Shoulder" value="Delete Shoulder" />
			</form>
			<form method="post" id="deleteHipForm" action="<?php echo BASE_URI;?>controller/delete.php">
				<input type="hidden" name="Delete_Hip" value="Delete Hip" />
			</form>
		</div>


<div class="hiddenDesktop">
	<h3 class="goldText">Step 2 - Add Embroidery</h3>
	<p style="font-size: 18px;">
		Use the sub menu below to select a region for Embroidery Customization.<br /> This opens a new window that allows you to customize your Embroidery for the selected region. <br /> Select "Next Step" when done, to view an order summary and to purchase your custom blanket.
	</p>
</div>

<div style="clear: both;"></div>

<div class="container">
	<div class="row">	
        <div class="col-md-9 col-md-push-3">
            <div <?php echo $class; ?> id="maincontent">
                <?php echo $mainContent; ?>
            </div><!-- //// main content -->
        </div><!-- col-md-9 -->
	<div class="col-md-3 col-md-pull-9">
		<div id="pullRightSidebar">
		 	<div class="innerSidebar">
				<!-- ************************************************************************	
								TEXT EMBROIDERY 								
				***************************************************************************** -->
				<div id="textEmbroidery" class="boxContainer boxContainerGold">
					<div class="boxHeading">
						<div>Choose Embroidery Region</div>
					</div>
				</div> <!--  CLOSE THE HEADING AREA -->
				<input class="boxContainer" type="button" value="Neck Embroidery" id="Neck" />
				<input class="deleteImage" type="button" value="Clear Neck" id="clearNeck" />
				<input class="boxContainer" type="button" value="Shoulder Embroidery" id="Shoulder" />
				<input class="deleteImage" type="button" value="Clear Shoulder" id="clearShoulder" />
				<input class="boxContainer" type="button" value="Hip Embroidery" id="Hip" />
				<input class="deleteImage" type="button" value="Clear Hip" id="clearHip" />
				<input class="boxContainer" type="button" value="Center Embroidery" id="Center" />
				<input class="deleteImage" type="button" value="Clear Center" id="clearCenter" />
				<!-- ************************************************************************	
										SPECIAL REQUESTS								
				***************************************************************************** -->				
				<div id="specialRequests" class="boxContainer">
					<div class="boxHeading">
						<div class="boxHeadingText">SPECIAL REQUESTS</div>
							<div id="speicalRequestsHeadingIcon" class="boxHeadingIcon"></div>
						</div>
				</div> <!--  CLOSE THE HEADING AREA -->
				<!-- ************************************************************************	
									Hidden area Special Requests Message Box				
				***************************************************************************** -->
				<div id="specialRequestsHidden" style="BORDER-COLOR: lightgrey; display: none;" class="boxContentTwo">

				<?php echo $specialRequests; ?>
				</div><!--  CLOSE THE SPECIAL REQUESTS AREA -->

				</div><!-- close innerSideBar -->
			</div>
		</div><!-- col-md-9 -->
	</div><!-- row -->
</div><!-- container -->

<div class="hiddenDesktop">
<div id="viewOrderTwo" class="readmore gold">Next Step</div>
</div>


<div id="img-out"></div>
<img id="imageOutOut" />

</article>
</div><!-- //// wrapper -->


<?php echo $scripts; ?>
<script>
	( function( $j ) {

	var body    = $j( 'body' ),
		_window = $j( window ),
		nav, button, menu;

	nav = $j( '#primary-navigation' );
	button = nav.find( '.menu-toggle' );
	menu = nav.find( '.nav-menu' );

	// Enable menu toggle for small screens.
	( function() {
		if ( ! nav || ! button ) {
			return;
		}

		// Hide button if menu is missing or empty.
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$j('.menu-toggle').on('click', function() {
			nav.toggleClass( 'toggled-on' );
			if ( nav.hasClass( 'toggled-on' ) ) {
				$j( this ).attr( 'aria-expanded', 'true' );
				menu.attr( 'aria-expanded', 'true' );
			} else {
				$j( this ).attr( 'aria-expanded', 'false' );
				menu.attr( 'aria-expanded', 'false' );
			}
		} );

	} )();

})($j);

setInterval(function(){
	$j.getJSON("http://localhost/fromSite/controller/isSession.php", function(data){
		console.log(data);
		if(data.Session != "good"){
			var redirect = data.Session;
			window.location.href = redirect;
		}
	});
}, 1000);
</script>

<script src="<?php echo BASE_URI;?>js/html2canvas.js"></script>

<script>
	

$j(function() { 
    $j("#viewOrder, #viewOrderTwo, #onToOrderSummary").click(function() {

    	var src = "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
    	var arrs = document.getElementsByClassName("backFromEmbroidery");
    	for(var i = 0; i < arrs.length; i++){
    		if(arrs[i].src == src){
    			arrs[i].src = "";
    		}
    	}

    	$j('#neckRegionImage img').addClass($j('#className').val());
    	$j('#pimlicoNeckRegionImage img').addClass($j('#className').val());
    	$j('#extendedNeckRegionImage img').addClass($j('#className').val());
    	$j('#hollywoodNeckRegionImage img').addClass($j('#className').val());
    	$j('#santaNeckRegionImage img').addClass($j('#className').val());
    	$j('#belmontNeckRegionImage img').addClass($j('#className').val());
    	$j('#gulfNeckRegionImage img').addClass($j('#className').val());

        html2canvas($j("#maincontent"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                // document.body.appendChild(canvas);
                // Convert and download as image 
                // Canvas2Image.saveAsPNG(canvas);
                
                $j("#img-out").append(canvas);
                $j("#img-out>canvas").attr("id","canvasImage");
                
                convertToImage();
            }
        });
    });
}); 
function convertToImage(){
    var can = document.getElementsByTagName("canvas")[0];
	var source = can.toDataURL("image/png", 1);
	var out = document.getElementById("imageOutOut");
	out.src = source;
	$j('#neckRegionImage img').removeClass($j('#className').val());
	$j('#pimlicoNeckRegionImage img').removeClass($j('#className').val());
	$j('#extendedNeckRegionImage img').removeClass($j('#className').val());
   	$j('#santaNeckRegionImage img').removeClass($j('#className').val());
    $j('#belmontNeckRegionImage img').removeClass($j('#className').val());
    $j('#gulfNeckRegionImage img').removeClass($j('#className').val());
	$j('#afterCanvasToImage').val(source);

	
	var bool = $j('#afterCanvasToImage').val() !== "";

	if(bool){

		$j('#goForth').submit();

	}

}


$j('#goForth').on("submit", function(event){

	event.preventDefault();

	var data = $j('#goForth').serialize();

	$j.ajax({
				url: 'http://localhost/fromSite/controller/orderSummaryController.php',
				data: data,
				method: 'POST', 
			}).done(function(json){


				if(json.POSTED == "true"){
					console.log(json.DATA_POSTED);
					window.parent.document.getElementById('initial').style.display = "none";
					var y = window.parent.document.getElementById("orderSummary").getElementsByTagName("iframe")[0].contentDocument.getElementById('pants');

					var childElem = document.createElement("DIV");
					childElem.innerHTML = json.RETURN_DATA;

					y.appendChild(childElem);

					window.parent.document.getElementById('orderSummary').style.display = "block";


				}
			
			});

});

</script>
</body>
</html>

