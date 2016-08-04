<?php
require dirname(__FILE__).'/commonResources.php';

$baseBody = isset($_SESSION['page2']['rugID'])  ? $_SESSION['page2']['rugID']  : "navy";
$baseBind = isset($_SESSION['page2']['bindID']) ? $_SESSION['page2']['bindID'] : "bind_white";
$basePipe = isset($_SESSION['page2']['pipeID']) ? $_SESSION['page2']['pipeID'] : "pipe_silver";

// to display the current values of the blanket piping and binding of selections on load - title and class name (class="bind_".$value)
$rugForShow = isset($_SESSION['page2']['Body Color']) ? $_SESSION['page2']['Body Color'] : "navy";
$bindForShow = isset($_SESSION['page2']['Binding Color']) ? $_SESSION['page2']['Binding Color'] : "white";
$pipeForShow = isset($_SESSION['page2']['Piping Color']) ? $_SESSION['page2']['Piping Color'] : "silvergrey";


$productInfo = $price = $class = $window = "";

$rug = $_SESSION['blanketName'];

switch($rug){
	case "Gulfstream net cooler":

	$window = 'class="gulfWindow"';

	$class = 'class="gulfAdj"';

	break;

	case "Santa Anita Stable Sheet":

	$window = 'class="santaWindow"';

	$class = 'class="santaAdj"';

	break;

	case "200g Belmont Stable Rug":

	$window = 'class="belmontWindow"';
	
	$class = 'class="gulfAdj"';

	break;
	
	case "Extended Neck Lined Rain Sheet":

	$window = 'class="extendedWindow"';

	$class = 'class="santaAdj"';

	break;

	case "Pimlico Wool Dress Sheet":

	$window = 'class="window"';

	$class = 'class="gulfAdj"';
	break;

	case "Hollywood cotton cooler":
	
	$window = 'class="hollywoodWindow"';

	$class = 'class="gulfAdj"';
	break;
}


$bodyColors = '	<!-- box 1 -->
				<div style="margin-top: 0;" id="bodyColor" class="boxContainer">
					<div class="boxHeading">
						<div class="boxHeadingText">Body Colors</div>
						<div id="boxHeadingIcon" class="boxHeadingIcon"></div>
					</div>	
				</div>
				<div id="bodyColorOptions" style="display: none;" class="boxContent">
					<p style="margin: 20px 0;" class="mini-box-p">Current Body Color: </p>
					<div title="'.$rugForShow.'" class="'.$rugForShow.'" id="miniBlockNeck" style="float: left; display: inline; width: 25px; height: 25px; border: 1px solid black; margin: 16px 0px 3px 10px;"></div>
					<div style="clear: both;"></div>
					<ul class="bodyColorList" id="listOne">
						<li id="navy" title="navy" data="body" class="navy"></li>
						<li id="royalblue" title="royalblue" data="body" class="royalblue"></li>
						<li id="huntergreen" title="huntergreen" data="body" class="huntergreen"></li>
						<li id="burgundy" title="burgundy" data="body" class="burgundy"></li>
						<li id="black" title="black" data="body" class="black"></li>
						<li id="silver_grey" title="silvergrey" data="body" class="silvergrey"></li>
						<li id="brown" title="brown" data="body" class="brown"></li>
						<li id="red" title="red" data="body" class="red"></li>
					</ul>
				</div>';

$bindingColors = '	<!-- box 2 -->
					<div id="bindingColor" class="boxContainer">
						<div class="boxHeading">
							<div class="boxHeadingText">Binding Colors</div>
							<div id="bindingHeadingIcon" class="boxHeadingIcon"></div>
						</div>
					</div>
					<div id="bindingColorOptions" style="display: none;" class="boxContent">
						<p style="margin: 20px 0;" class="mini-box-p">Current Binding Color: </p>
						<div title="'.$bindForShow.'" class="bind_'.$bindForShow.'" id="miniBlockBind" style="float: left; display: inline; width: 25px; height: 25px; border: 1px solid black; margin: 16px 0px 0px 2px;"></div>
						<div style="clear: both;"></div>
						<ul class="bodyColorList" id="listTwo">
							<li id="bind_silvergrey" title="silvergrey" data="bind" class="bind_silvergrey"></li>
							<li id="bind_turquoise" title="turquoise" data="bind" class="bind_turquoise"></li>
							<li id="bind_navy" title="navy" data="bind" class="bind_navy"></li>
							<li id="bind_royalblue" title="royalblue" data="bind" class="bind_royalblue"></li>
							<li id="bind_lightblue" title="lightblue" data="bind" class="bind_lightblue"></li>
							<li id="bind_huntergreen" title="huntergreen" data="bind" class="bind_huntergreen"></li>
							<li id="bind_black" title="black" data="bind" class="bind_black"></li>
							<li id="bind_cream" title="cream" data="bind" class="bind_cream"></li>
							<li id="bind_tan" title="tan" data="bind" class="bind_tan"></li>
							<li id="bind_brown" title="brown" data="bind" class="bind_brown"></li>
							<li id="bind_purple" title="purple" data="bind" class="bind_purple"></li>
							<li id="bind_burgundy" title="burgundy" data="bind" class="bind_burgundy"></li>
							<li id="bind_red" title="red" data="bind" class="bind_red"></li>
							<li id="bind_orange" title="orange" data="bind" class="bind_orange"></li>
							<li id="bind_gold" title="gold" data="bind" class="bind_gold"></li>
							<li id="bind_yellow" title="yellow" data="bind" class="bind_yellow"></li>
							<li id="bind_white" title="white" data="bind" class="bind_white"></li>
							<li id="bind_hotpink" title="hotpink" data="bind" class="bind_hotpink"></li>
						</ul>
					</div>';

$pipingColors = '	<!-- box 3 -->
					<div id="pipingColor" class="boxContainer">
						<div class="boxHeading">
							<div class="boxHeadingText">Piping Colors</div>
							<div id="pipingHeadingIcon" class="boxHeadingIcon"></div>
						</div>	
					</div>
					<div id="pipingColorOptions" style="display: none;" class="boxContent">
						<p style="margin: 20px 0;" class="mini-box-p">Current Piping Color: </p>
						<div title="'.$pipeForShow.'" class="pipe_'.$pipeForShow.'" id="miniBlockPipe" style="float: left; display: inline; width: 25px; height: 25px; border: 1px solid black; margin: 16px 0px 3px 10px;"></div>
						<div style="clear: both;"></div>
						<ul class="bodyColorList" id="listThree">
							<li id="pipe_silver" title="silver" data="pipe" class="pipe_silver"></li>
							<li id="pipe_turquoise" title="turquoise" data="pipe" class="pipe_turquoise"></li>
							<li id="pipe_navy" title="navy" data="pipe" class="pipe_navy"></li>
							<li id="pipe_royalblue" title="royalblue" data="pipe" class="pipe_royalblue"></li>
							<li id="pipe_lightblue" title="lightblue" data="pipe" class="pipe_lightblue"></li>
							<li id="pipe_huntergreen" title="huntergreen" data="pipe" class="pipe_huntergreen"></li>
							<li id="pipe_black" title="black" data="pipe" class="pipe_black"></li>
							<li id="pipe_cream" title="cream" data="pipe" class="pipe_cream"></li>
							<li id="pipe_tan" title="tan" data="pipe" class="pipe_tan"></li>
							<li id="pipe_brown" title="brown" data="pipe" class="pipe_brown"></li>
							<li id="pipe_purple" title="purple" data="pipe" class="purple"></li>
							<li id="pipe_burgundy" title="burgundy" data="pipe" class="pipe_burgundy"></li>
							<li id="pipe_red" title="red" data="pipe" class="pipe_red"></li>
							<li id="pipe_orange" title="orange" data="pipe" class="pipe_orange"></li>
							<li id="pipe_gold" title="gold" data="pipe" class="pipe_gold"></li>
							<li id="pipe_yellow" title="yellow" data="pipe" class="pipe_yellow"></li>
							<li id="pipe_white" title="white" data="pipe" class="white"></li>
							<li id="pipe_hotpink" title="hotpink" data="pipe" class="pipe_hotpink"></li>
							<li id="pipe_grey" title="grey" data="pipe" class="pipe_grey"></li>
						</ul>
					</div>';

$pageLoadingLightbox = 	'<div id="pageLoadingLightbox" style="display: none;">
							<div id="loading">
							
							<div style="padding-top: 10%; padding-left: 10%;" class="innerLoading">
								<h1 class="title">Loading Your Blanket, <br />Please Wait....</h1>
							</div>
							</div>
						</div>';

/* 	==========================================================================
		Breadcrumb
	==========================================================================
*/

// set of variables for the breadcrumb
$colorsId = 'id="getColors"';
$onToEmbroidery = 'id="onToEmbroidery"';

$breadCrumb = '<ul class="bread">
				<li>
					<div '.$colorsId.'class="block">
						<div class="gapOne"></div>
							<div class="third" style="background-color: #fff;">
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
							Choose your Colors
						</div>
					</div>
				</li>
				<li>
					<div '.$onToEmbroidery.'class="block">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div id="onToEmbroideryNumber" class="number">2</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div id="onToEmbroideryText" class="textBoxTwo">
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
					<div id="addEmbroidery" title="Next Step" style="float: right; width: 100px;" class="block">
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

// // <script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/canvas.js"></script>
// <script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/generalJS.js"></script>
$chooseColorsScripts = '
			<script type="text/javascript" src="'.BASE_URI.'js/canvas.js"></script>
			<script type="text/javascript" src="'.BASE_URI.'js/generalJS.js"></script>
			<script type="text/javascript" src="'.BASE_URI.'js/colors/colors.js"></script>
			';

?>