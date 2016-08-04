<?php
/*
*
*	resources for the index page - landing page of the application
*
*/
require dirname(__FILE__).'/commonResources.php';


$neckDefaultImage = $shoulderDefaultImage = $hipDefaultImage = $centerDefaultImage = "<img class='backFromEmbroidery' src='";

$neckDefaultImage .= isset($_SESSION['embroidery_neck']) ? $_SESSION['embroidery_neck'] : "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
$neckDefaultImage .= "' id='neckEmbroideryImage' alt='Embroidery Created Image' />";

$shoulderDefaultImage .= isset($_SESSION['embroidery_shoulder']) ? $_SESSION['embroidery_shoulder'] : "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
$shoulderDefaultImage .= "' id='shoulderEmbroideryImage' alt='Embroidery Created Image' />";

$hipDefaultImage .= isset($_SESSION['embroidery_hip']) ? $_SESSION['embroidery_hip'] : "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
$hipDefaultImage .= "' id='hipEmbroideryImage' alt='Embroidery Created Image' />";

$centerDefaultImage .= isset($_SESSION['embroidery_center']) ? $_SESSION['embroidery_center'] : "http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/default.png";
$centerDefaultImage .= "' id='centerEmbroideryImage' alt='Embroidery Created Image' />";

// the following are needed for window on load on choose colors: 
$baseBody = isset($_SESSION['page2']['rugID'])  ? $_SESSION['page2']['rugID']  : "navy";
$baseBind = isset($_SESSION['page2']['bindID']) ? $_SESSION['page2']['bindID'] : "bind_white";
$basePipe = isset($_SESSION['page2']['pipeID']) ? $_SESSION['page2']['pipeID'] : "pipe_silvergrey";

// the following are needed for the display of the final value for the order summary
$rugColor = isset($_SESSION['page2']['Body Color']) ? $_SESSION['page2']['Body Color'] : "navy";
$binding = isset($_SESSION['page2']['Binding Color']) ? $_SESSION['page2']['Binding Color'] : "white";
$piping = isset($_SESSION['page2']['Piping Color']) ? $_SESSION['page2']['Piping Color'] : "silvergrey";


$neck = $center = $hip = $shoulder = "";

$rotateClass = "";


/* 	==========================================================================
		Add text - Breadcrumb
	==========================================================================
*/
$backToColors = 'id="backToColors"';
$addTextBreadCrumb = '<ul class="bread">
				<li>
					<div '.$backToColors.'class="block">
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
								<div class="number">&#10004;</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div class="textBoxTwo">
							Add Embroidery
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
								<div class="number grey">3</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div class="textBoxTwo greyText">
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

$scripts = '
			<script type="text/javascript" src="'.BASE_URI.'js/jquery-ui.js"></script>
			<script type="text/javascript" src="'.BASE_URI.'js/touchPunch.js"></script>
			<script type="text/javascript" src="'.BASE_URI.'js/index/index.js"></script>
			';
?>