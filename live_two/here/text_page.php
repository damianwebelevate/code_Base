<?php 

session_start(); 



// user selects which area they want to add the text to
// form submits to itself removes the values from the server if they are set
// sends a a get request to the embroidery page and applicaiton picks up from there overwriting the values within it
// check the value of which area that was submitted
if(!(empty($_POST['whichArea']))){
	$whichArea = $_POST['whichArea'];
}else{
	$whichArea = " ";
}

// switch through the values and find the area and then unset the current values if set
// allows constant revisions of designs
// sets a get request for the location
switch($whichArea){
	case "Neck":
	if(isset($_SESSION['embroidery_neck'])){
		echo "it is set";
		session_start();
		unset($_SESSION['embroidery_neck']);
		unset($_SESSION['new_embroidery_neck']);
		// unset($_POST['whichArea']);
		$neckImageFromEmbroidery = " ";
		$detailsNeck = " ";
		session_write_close();
		$region = "Neck";
		header("location: https://triplecrowncustom.com/embroidery?region=".$region);
	}else{
		$region = "Neck";
		header("location: https://triplecrowncustom.com/embroidery?region=".$region);

	}
	break;
	case "Center":
	if(isset($_SESSION['embroidery_center'])){
		session_start();
		unset($_SESSION['embroidery_center']);
		unset($_SESSION['new_embroidery_center']);
		unset($_POST['whichArea']);
		$neckImageFromEmbroidery = " ";
		$detailsNeck = " ";
		session_write_close();
		$region = "Center";
		header("location: https://triplecrowncustom.com/embroidery?region=".$region);
	}else{
		$region = "Center";
		header("location: https://triplecrowncustom.com/embroidery?region=".$region);
	}
	break;
	case "Hip":
	if(isset($_SESSION['embroidery_hip'])){
		session_start();
		unset($_SESSION['embroidery_hip']);
		unset($_SESSION['new_embroidery_hip']);
		unset($_POST['whichArea']);
		$neckImageFromEmbroidery = " ";
		$detailsNeck = " ";
		session_write_close();
		$region = "Hip";
		header("location: https://triplecrowncustom.com/embroidery?region=".$region);
	}else{
		$region = "Hip";
		header("location: https://triplecrowncustom.com/embroidery?region=".$region);
	}
	break;
	case "Shoulder":
	if(isset($_SESSION['embroidery_shoulder'])){
		session_start();
		unset($_SESSION['embroidery_shoulder']);
		unset($_SESSION['new_embroidery_shoulder']);
		unset($_POST['whichArea']);
		$neckImageFromEmbroidery = " ";
		$detailsNeck = " ";
		session_write_close();
		$region = "Shoulder";
		header("location: https://triplecrowncustom.com/embroidery?region=".$region);
	}else{
		$region = "Shoulder";
		header("location: https://triplecrowncustom.com/embroidery?region=".$region);
	}
	break;
}
// create variables to house the details from the processed embroidery
$neckImageFromEmbroidery = $centerImageFromEmbroidery = $hipImageFromEmbroidery = $shoulderImageFromEmbroidery = "";
// session values created by the captureEmbroideryDetails.php
// for display need:
// - created image source
$srcNeck = isset($_SESSION['embroidery_neck']) ? $_SESSION['embroidery_neck'] : "https://triplecrowncustom.com/wp-content/themes/triple/img/default.png";
$neckImageFromEmbroidery = '<img src="'.$srcNeck.'" class="backFromEmbroidery"/>';
$srcCenter = isset($_SESSION['embroidery_center']) ? $_SESSION['embroidery_center'] : "https://triplecrowncustom.com/wp-content/themes/triple/img/default.png";
$centerImageFromEmbroidery = '<img src="'.$srcCenter.'" class="backFromEmbroidery"/>';
$srcHip = isset($_SESSION['embroidery_hip']) ? $_SESSION['embroidery_hip'] : "https://triplecrowncustom.com/wp-content/themes/triple/img/default.png";
$hipImageFromEmbroidery = '<img src="'.$srcHip.'" class="backFromEmbroidery"/>';
$srcShoulder = isset($_SESSION['embroidery_shoulder']) ? $_SESSION['embroidery_shoulder'] : "https://triplecrowncustom.com/wp-content/themes/triple/img/default.png";
$shoulderImageFromEmbroidery = '<img src="'.$srcShoulder.'" class="backFromEmbroidery"/>';


/* 	==========================================================================
		Session Data
	==========================================================================
*/

$image = $rugTitle = "";

$rugTitle = isset($_SESSION['index']['Rug Selection']) ? $_SESSION['page2']['Rug Selection'] : " "; 
$image = isset($_SESSION['page2']['Image']) ? $_SESSION['page2']['Image'] : "";

// the following are needed for window on load on choose colors: 
$baseBody = isset($_SESSION['page2']['rugID'])  ? $_SESSION['page2']['rugID']  : "navy";

$baseBind = isset($_SESSION['page2']['bindID']) ? $_SESSION['page2']['bindID'] : "bind_white";

$basePipe = isset($_SESSION['page2']['pipeID']) ? $_SESSION['page2']['pipeID'] : "pipe_silvergrey";

// the following are needed for the display of the final value for the order summary
$rugColor = isset($_SESSION['page2']['Body Color']) ? $_SESSION['page2']['Body Color'] : "navy";
$binding = isset($_SESSION['page2']['Binding Color']) ? $_SESSION['page2']['Binding Color'] : "white";
$piping = isset($_SESSION['page2']['Piping Color']) ? $_SESSION['page2']['Piping Color'] : "silvergrey";


$neck = $shoulder = $center = $hip = $rotate = $price = "";
unset($_SESSION['Page Two_token']);

require (dirname(__FILE__).'/resources.php');
$value = generateFormToken("Page Three");

$rotateClass = "";
switch($rugTitle){

	case "Please Select A Product":
	$class = "not-set";
	break;

	case "Gulfstream net cooler":
	$rotateClass = 'pimlicoRotate some';
	$rotate = 'class="gulfRotate gulfNeckRegionImageHolder"';
	$neck = 		'<!-- Pimlico Neck Region on Rug -->
					<div id="neckRegionImageHolder" '.$rotate.'>
						<div id="pimlicoNeckRegionImage">
							'.$neckImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- Pimlico Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="pimlicoShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- Pimlico Center Region on Rug -->
					<div id="centerRegionImageHolder" class="pimlicoCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- Pimlico Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="pimlicoHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipImageFromEmbroidery.'
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
					<div id="santaNeckRegionImageHolder" '.$rotate.'>
						<div id="santaNeckRegionImage">
							'.$neckImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- Pimlico Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="santaShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- Pimlico Center Region on Rug -->
					<div id="centerRegionImageHolder" class="santaCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- Pimlico Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="santaHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipImageFromEmbroidery.'
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
							'.$neckImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- belmont Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="belmontShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- belmont Center Region on Rug -->
					<div id="centerRegionImageHolder" class="belmontCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- belmont Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="belmontHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipImageFromEmbroidery.'
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
							'.$neckImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- extended Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="extendedShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- extended Center Region on Rug -->
					<div id="centerRegionImageHolder" class="extendedCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- extended Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="extendedHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipImageFromEmbroidery.'
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
							'.$neckImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$shoulder = 	'<!-- Pimlico Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="pimlicoShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- Pimlico Center Region on Rug -->
					<div id="centerRegionImageHolder" class="pimlicoCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- Pimlico Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="pimlicoHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipImageFromEmbroidery.'
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
							'.$neckImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';

	$shoulder = 	'<!-- hollywood stream Shoulder Region on Rug -->
					<div id="shoulderRegionImageHolder" class="hollywoodShoulderRegionImageHolder">
						<div id="shoulderRegionImage">
							'.$shoulderImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$center = 		'<!-- hollywood stream Center Region on Rug -->
					<div id="centerRegionImageHolder" class="hollywoodCenterRegionImageHolder">
						<div id="centerRegionImage">
							'.$centerImageFromEmbroidery.'
						</div>
					</div>
					<div style="clear: both;"></div>';
	$hip = 			'<!-- hollywood stream Hip Region on Rug -->
					<div id="hipRegionImageHolder" class="hollywoodHipRegionImageHolder">
						<div id="hipRegionImage">
							'.$hipImageFromEmbroidery.'
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
						<img id="canvasHorse" data="show" src="'.$image.'" class="image">
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
?>

<?php
/* 	==========================================================================
		Breadcrumb
	==========================================================================
*/
$breadCrumb = '<ul class="bread">
				<li>
					<div id="backToColors" title="Go back to choose colors" class="block">
						<div class="gapOne"></div>
							<div class="third" style="background-color: #fff;">
								<!-- empty -->
							</div>
							<div class="third">
								<div id="backToColorsNumber" class="number">&#10004;</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div id="backToColorsText" class="textBoxTwo">
							Choose your Colors
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div class="number">2</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div style="font-weight: 600;" class="textBoxTwo">
							Add Embroidery
						</div>
					</div>
				</li>
				<li>
					<div title="Next Step - Order Summary" id="onToOrderSummary" class="block">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div id="onToOrderSummaryNumber" class="number grey">3</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div id="onToOrderSummaryText" class="textBoxTwo greyText">
							Order Summary
						</div>
					</div>
				</li>
				<li>
					<div class="block">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div class="number grey">4</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>	
						<div style="clear: both;"></div>		
						<div class="textBoxTwo greyText">
							Checkout
						</div>
					</div>
				</li>
				<li>
					<div id="viewOrder" title="Next Step" style="float: right; width: 100px;" class="block">
						<div title="Next Step" class="gapOne"></div>
						<div style="float: right;" class="third">
							<div title="Next Step" id="goldBack" style="float: right;" class="goldBack">&#x276f;</div>
						</div>
						<div style="clear: both;"></div>
						<div title="Next Step" class="gapTwo"></div>
						<div title="Next Step" id="goldText" class="goldText">
							NEXT STEP
						</div>
					</div>
				</li>
			</ul>';
$specialRequests = '	<div style="width: 95%; margin: 0 auto;">
							<p>Please use the message box below to send us any special requests that you may have for your custom rug.</p>
							<h3>Message:</h3>
							<p contenteditable="true" id="requestText"></p>
							<p style="visibility: hidden;" id="hiddenMessageArea"></p>
						</div>';	
?>
<?php
/*
* Copyright 2015, 2016 Damian O'Rourke
* Email: damiano_rourke@hotmail.com
* Website: damianorourke.com
*/
/*
*  This file is part of Triple Crown Custom - TCC

    TCC is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    TCC is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with TCC.  If not, see <http://www.gnu.org/licenses/>.
*/


/*
*
* Template Name: Text Page
*
*/

// after the colors are selected then go to this page for text and logo

get_header();?>

<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
			<div class="container-fluid">
				<div id="main-content" class="main-content">
					<div id="content" class="site-content" role="main">

						<div class="wrapper wrapperMobile">

							<input id="className" type="hidden" value="<?php echo $rotateClass; ?>" />

							<form style="display: none;" id="goForth" method="post" action="https://triplecrowncustom.com/new-order-summary">
								<textarea id="afterCanvasToImage" name="afterCanvasToImage"></textarea>
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
											<h1 id="title" class="title"><span></span><?php echo $rugTitle; ?></h1>
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
										<?php echo $breadCrumb; ?>
									</div><!-- //// close row -->
								</div><!-- //// close bread crumb -->
<!-- ========================================================================================================================
#																															#
#																															#
#												button to open the text 													#
#																															#
#																															#
========================================================================================================================= -->
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<input type="button" title="First Time Users, Please Read" class="blinkInfo" value="New User Embroidery Guide" id="showUserGuide"/>
										</div>
									</div><!-- //// close row -->
								</div><!-- //// close container -->

								<!-- hidden user guide -->
								<div class="container-fluid">
									<div class="row">
										<div style="display: none;" id="userGuide">
											<article>
												<header>
													<h2 class="goldText">New User Embroidery Guide</h2>
												</header>
												<p></p>
												<ul class="amy_list">
													<li>Use the four options on the left hand side of the page to select your embroidery areas:
														<ul class="noList">
															<li>Neck</li>
															<li>Center</li>
															<li>Hip</li>
															<li>Shoulder</li>
														</ul>
													</li>
													<li>Selecting an area will open our custom designed Embroidery Tool where you can add text and logos.</li>
													<li>On returning to this page your design will be visible for the area selected on the blanket</li>
													<li>Should you have any specific requests regarging your embroidery please use the Special Requests area to send a message to our team</li>
													<li>If at ANY stage you are not happy with this process please call:
														<p><a href="tel:+18008876688">(+1) 800-887-6688</a></p>
														Email:
														<p><a href="mailto:info@triplecrowncustom.com?Subject=Request%20for%20design%20assistance%20Triplecrowncustom%20Website">info@triplecrowncustom.com</a></p>
													</li>
												</ul>
												<input type="button" id="closeUserGuide" value="Hide User Guide" />
											</article>
										</div>
									</div>
								</div>

								<div class="hiddenDesktop">
									<h3 class="goldText">Step 2 - Add Embroidery</h3>
									<p style="font-size: 18px;">
										Use the sub menu below to select a region for Embroidery Customization.<br /> This opens a new window that allows you to customize your Embroidery for the selected region. <br /> Select "Next Step" when done, to view an order summary and to purchase your custom blanket.</p>
								</div>

								<div style="clear: both;"></div>


								<div style="display: none;">
									<!-- forms for submitting a delete value for each region -->
									<form method="post" id="deleteNeckForm" action="https://triplecrowncustom.com/wp-content/themes/triple/site/delete.php">
										<input type="hidden" name="Delete_Neck" value="Delete Neck" />
									</form>
									<form method="post" id="deleteCenterForm" action="https://triplecrowncustom.com/wp-content/themes/triple/site/delete.php">
										<input type="hidden" name="Delete_Center" value="Delete Center" />
									</form>
									<form method="post" id="deleteShoulderForm" action="https://triplecrowncustom.com/wp-content/themes/triple/site/delete.php">
										<input type="hidden" name="Delete_Shoulder" value="Delete Shoulder" />
									</form>
									<form method="post" id="deleteHipForm" action="https://triplecrowncustom.com/wp-content/themes/triple/site/delete.php">
										<input type="hidden" name="Delete_Hip" value="Delete Hip" />
									</form>
								</div>

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
													<div class="boxHeadingText">Choose Embroidery Region</div>
												</div>
											</div> <!--  CLOSE THE HEADING AREA -->
											<!-- ************************************************************************	
											Hidden area four titles NECK CENTER HIP FRONT					
											***************************************************************************** -->
											<div id="textEmbroideryHidden" class="boxContentContent">
												<form method="post" id="embroideryChoice" action="https://triplecrowncustom.com/add-text-and-images/">

													
												<div class="boxContainerTwo" id="chooseEmbroideryNeck" title="Neck">Neck Embroidery</div>
													<div id="deleteNeck">Clear Neck Embroidery</div>
												<div class="boxContainerTwo" id="chooseEmbroideryCenter" title="Center">Center Embroidery</div>
													<div id="deleteCenter">Clear Center Embroidery</div>
												<div class="boxContainerTwo" id="chooseEmbroideryHip" title="Hip">Hip Embroidery</div>
													<div id="deleteHip">Clear Hip Embroidery</div>
												<div class="boxContainerTwo" id="chooseEmbroideryShoulder" title="Shoulder">Shoulder Embroidery</div>
													<div id="deleteShoulder">Clear Shoulder Embroidery</div>

												<input type="hidden" value="" id="changeMe" name="whichArea" />

												</form>

											</div> <!-- CLOSE TEXTEMBROIDERYHIDDEN  -->
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
					</div> <!-- #site-content -->
				</div><!-- #main-content -->
			</div><!-- container-fluid -->
			<!-- 
		</div>should be wrapper -->
	<!-- 
	</div>should be container -->
<!-- 
</div>should be site main -->


<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/html2canvas.js"></script>
<!-- src="https://triplecrowncustom.com/wp-content/themes/triple/js/embroideryPage.js" type="text/javascript" -->
<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/generalJS.js" type="text/javascript" ></script>


<script>
	
$j(document).ready(function(){
$j(function() { 
    $j("#viewOrder, #viewOrderTwo, #onToOrderSummary").click(function() {
    	// alert($j('#className').val());
    	var src = "https://triplecrowncustom.com/wp-content/themes/triple/img/default.png";
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
	$j('#goForth').submit();
};
});

// select the area 
$j('#chooseEmbroideryNeck, #chooseEmbroideryCenter, #chooseEmbroideryHip, #chooseEmbroideryShoulder').on("click", function(){

    $j('#changeMe').val($j(this).attr("title"));
    $j('#embroideryChoice').submit();
});


</script>
<?php
get_footer();