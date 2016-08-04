<?php header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");header("Cache-Control: no-cache");header("Pragma: no-cache"); header('X-Robots-Tag: noindex,nofollow'); ?>
<?php 

session_start();


$baseBody = $basePipe = $baseBind = $rug = $rugForShow = $bindForShow = $pipeForShow = "";

$rug = isset($_SESSION['index']['Rug Selection']) ? $_SESSION['index']['Rug Selection'] : " "; 

$baseBody = isset($_SESSION['page2']['rugID'])  ? $_SESSION['page2']['rugID']  : "navy";

$baseBind = isset($_SESSION['page2']['bindID']) ? $_SESSION['page2']['bindID'] : "bind_white";

$basePipe = isset($_SESSION['page2']['pipeID']) ? $_SESSION['page2']['pipeID'] : "pipe_silvergrey";

// to display the current values of the blanket piping and binding of selections on load - title and class name
$rugForShow = isset($_SESSION['page2']['Body Color']) ? $_SESSION['page2']['Body Color'] : "navy";
$bindForShow = isset($_SESSION['page2']['Binding Color']) ? $_SESSION['page2']['Binding Color'] : "white";
$pipeForShow = isset($_SESSION['page2']['Piping Color']) ? $_SESSION['page2']['Piping Color'] : "silvergrey";




$productInfo = $price = $class = $window = "";

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

/* 	==========================================================================
		New Layout
	==========================================================================
*/


$breadCrumb = '<ul class="bread">
				<li>
					<div class="block toHide">
						<div class="gapOne"></div>
							<div class="third" style="background-color: #fff;">
								<!-- empty -->
							</div>
							<div class="third">
								<div class="number">1</div>
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
					<div id="onToEmbroidery" title="Next Step - Add Embroidery" class="block toHide">
						<div class="gapOne"></div>
							<div class="third">
								<!-- empty -->
							</div>
							<div class="third">
								<div id="onToEmbroideryNumber" class="number grey">2</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div id="onToEmbroideryText" class="textBoxTwo greyText">
							Add Embroidery
						</div>
					</div>
				</li>
				<li>
					<div class="block  toHide">
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
					<div class="block  toHide">
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
					<div id="create" title="Next Step" style="float: right; width: 100px;" class="block">
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
* Template Name: Rug Page
*
*/

/* landing page for the create rug */

get_header(); ?>

<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
		<div class="container-fluid">
			<div id="main-content" class="main-content">
				<div id="content" class="site-content" role="main">

					<!-- 	==========================================================================
							using this form as a dumping ground for values
							========================================================================== -->
					<?php echo $pageLoadingLightbox; ?>

					<form id="pageTwoForm" >
						<input type="hidden" id="rugcolor" name="rugcolor" value="<?php echo $baseBody; ?>"/>
						<input type="hidden" id="bindcolor" name="bindcolor" value="<?php echo $baseBind; ?>" />
						<input type="hidden" id="pipecolor" name="pipecolor" value="<?php echo $basePipe; ?>" /> 	
					</form>

					<form id="getName" action="https://triplecrowncustom.com/wp-content/themes/triple/site/getcolors.php" method="post">
						<table style="display: none;" >
							<tbody>
								<tr>
									<th>Rug Color:</th>
									<th>Biniding Color:</th>
									<th>Piping Color:</th>
									<th></th>
								</tr>
								<tr>
									<td>
										<p id="rugColorOut">navy</p>
										<input type="hidden" id="value1" name="rugColorOut" value="navy">
										<input type="hidden" id="value1a" name="rugColorOutA" value="<?php echo $baseBody; ?>">
									</td>
									<td>
										<p id="bindColorOut">silvergrey</p>
										<input type="hidden" id="value2" name="bindColorOut" value="silvergrey">
										<input type="hidden" id="value2a" name="bindColorOutA" value="<?php echo $baseBind; ?>">
									</td>
									<td>
										<p id="pipeColorOut">white</p>
										<input type="hidden" id="value3" name="pipeColorOut" value="white">
										<input type="hidden" id="value3a" name="pipeColorOutA" value="pipe_white">
									</td>
									<td>
										<textarea style="display: none" id="value4" rows="2000" cols="500" name="imageJoined"></textarea>
										<input type="hidden" value='<?php echo $rug; ?>' name="rugSelection" />
									</td>
								</tr>
							</tbody>
						</table>
					</form>		

					<div class="wrapper wrapperMobile">
						
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
											<h1 id="title" class="title"></h1>
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
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<input type="button" title="First Time Users, Please Read" class="blinkInfo" style="margin-bottom: 60px;" value="Step One New User Guide" id="showUserGuide"/>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<!-- empty -->
										</div>
									</div><!-- //// close row -->
								</div><!-- //// close container -->

								<div class="container-fluid">
									<div class="row">

										<div style="display: none;" id="userGuide">
											<article>
												<header>
													<h2 class="goldText">Step 1 New User Guide</h2>
												</header>
												<p>We want to make your design process as smooth as possible, so if this is your first time visiting our website please take some time to read through our guides.</p>
												<ul class="amy_list">
													<li>Use the options on the left hand side of the page to choose the colors for your blanket.</li>
													<li>There are three different color areas to customize, the blanket body, the binding and the piping. </li>
													<li>To display the color options press the <span style="font-size: 22px">+</span> sign for each area.</li>
													<li>You can close up the box again by pressing <span style="font-size: 22px">–</span> sign. </li>
													<li>When you are happy with your color choices, please use the 'Next Step' button which will bring you to Step 2 Add Embroidery</li>
												</ul>
												<input type="button" id="closeUserGuide" value="Hide User Guide" />
											</article>
										</div>
									</div>
								</div>

								<div style="clear: both;"></div>

								<div class="hiddenDesktop">
									<h3 class="goldText">Step 1 - Choose your Colors</h3>
									<p style="font-size: 16px;">
									Use the sub menu below to alter the Body, Binding and Piping Colors of your blanket.<br /> Select "Next Step" when done, to add embroidery</p>
								</div><!-- hidden Desktop -->

								<div class="row">
								  <div class="col-md-9 col-md-push-3">
								  	<!-- <div class="maincontent">Main</div> -->

								  	<!-- main area -->
										<div <?php echo $class; ?> id="maincontent">
											<img id="mainImageLeft" data="show">
											<img id="defaultBaseColor" data="show">
											<img id="defaultPipingColor" data="show">
											<img id="defaultBindingColor" data="show">

											<div <?php echo $window; ?> id="window">
												<img id="reflectMainImage" src="" >
												<img id="reflectBaseImage" src="" >
												<img id="reflectPipeImage" src="" >
												<img id="reflectBindImage" src="" >
											</div>

										</div><!-- main area -->


								  </div><!-- col-md-push-3 -->
								  <div class="col-md-3 col-md-pull-9">
								  	<!-- <div class="sidebar">side</div> -->

								  	<!-- sidebar -->
									<div id="pullRightSidebar">
										<div class="innerSideBar">
											<?php echo $bodyColors; ?>
											<?php echo $bindingColors; ?>
											<?php echo $pipingColors; ?>
										</div><!-- close innerSideBar -->
									</div><!-- close sideBar -->

								  </div><!-- // col-md-pull-9 -->
								</div><!-- row -->
															
								<div class="hiddenDesktop">
									<div id="createTwo" class="readmore gold">Next Step</div>
								</div>
					


								<div style="clear: both;"></div>

								</div><!-- close wrapper-->

								<div class="canvas" id="canvas">
									<!-- duplicate of the images to draw a canvas to the screen and capture the inputs on click -->
									<!-- <img src="" id="horse" class="image" /> -->

								</div>

						</article>
					</div> <!-- #site-content -->
				</div><!-- #main-content -->
			</div><!-- container-fluid -->
			<!-- 
		</div>should be wrapper -->
	<!-- 
	</div>should be container -->
<!-- 
</div>should be site main -->



<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/generalJS.js" ></script>

<script type="text/javascript" >
		// load initial styles
		// loadAspects(<?php echo $rug; ?>,'','','');
		window.onload = function(){
			// alert("loaded");
			loadAspects(<?php echo "'".$rug."'"; ?> , <?php echo "'".$baseBody."'"; ?>, <?php echo "'".$baseBind."'"; ?>, <?php echo "'".$basePipe."'"; ?>);
		}
			
	

</script>

<script type="text/javascript">

	// change the styles
	$j("[data='body']").on("click", function(){

		// get the attribute by id.  this id is the accessor for the rug color in the json file

		var bodyColor = $j(this).attr('id');

		// get the attribute title: for display and for updating the server on selection of color

		var bodyColorOut = $j(this).attr('title');

		// set the hidden text field #rugcolor to the id of the element clicked.  Used as load options so that the ineterface remembers selections
		// dump the values here:
		$j('#rugcolor').val(bodyColor);

		// set the output selected as a display for the user:

		$j('#rugColorOut').html(bodyColorOut);

		// to check the remaining if set use the following (from dumped information)

		var bindingColor = $j('#bindcolor').val() || "";

		console.log(bindingColor);

    	var pipingColor = $j('#pipecolor').val() || "";

    	// change the little box to have the same class as that selected

    	$j('#miniBlockNeck').attr("class", $j(this).attr("class"));
    	$j('#miniBlockNeck').attr("title", $j(this).attr("title"));

    	// finally set the final form for submission with the values in it - wasteful for now

    	$j('#value1').val(bodyColorOut);
    	$j('#value1a').val(bodyColor);

    	// load the aspects with the following either a value or a 
    	loadAspects(<?php echo "'".$rug."'"; ?>, bodyColor, bindingColor, pipingColor);

	});

// binding color

	$j("[data='bind']").on("click", function(){

		var bodyColor = "";

	    bodyColor = $j('#rugcolor').val();

		var bindingColor = $j(this).attr('id');

		var bindColorOut = $j(this).attr('title');

		var bodyColor = $j('#rugcolor').val() || "";

    	var pipingColor = $j('#pipecolor').val() || "";

    	$j('#miniBlockBind').attr("class", $j(this).attr("class"));
   		$j('#miniBlockBind').attr("title", $j(this).attr("title"));

	    $j('#bindcolor').val(bindingColor);

	    $j('#bindColorOut').html(bindColorOut);

	    // title attr
	    $j('#value2').val(bindColorOut);
	    // id attr
	    $j('#value2a').val(bindingColor);

	    loadAspects(<?php echo "'".$rug."'"; ?>, bodyColor, bindingColor, pipingColor);

    });

// piping color

    $j("[data='pipe']").on("click", function(){

    var pipingColor = $j(this).attr('id');

    var bindingColor = $j('#bindcolor').val() || "";

    var bodyColor = $j('#rugcolor').val() || "";

    var pipeColorOut = $j(this).attr('title');

    // console.log("pipe: "+pipingColor+" binding color: "+bindingColor+" body color: "+bodyColor);

    $j('#miniBlockPipe').attr("class", $j(this).attr("class"));
    $j('#miniBlockPipe').attr("title", $j(this).attr("title"));

    $j('#pipecolor').val(pipingColor);

    $j('#pipeColorOut').html(pipeColorOut);

    $j('#value3').val(pipeColorOut);
    $j('#value3a').val(pipingColor);

    // console.log("this is the piping color: " + $j('#pipecolor').val());

    loadAspects(<?php echo "'".$rug."'"; ?>, bodyColor, bindingColor, pipingColor);

    });

</script>

<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/canvas.js"></script>


<?php
get_footer();
