<?php

require dirname(__FILE__).'/../includes/chooseColorsIncludes.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Center Region</title>
<?php echo $head; ?>
</head>
<body>

<!-- 	==========================================================================
	using this form as a dumping ground for values
	========================================================================== -->
<form id="pageTwoForm" >
	<input type="hidden" id="rugcolor" name="rugcolor" value="<?php echo $baseBody; ?>"/>
	<input type="hidden" id="bindcolor" name="bindcolor" value="<?php echo $baseBind; ?>" />
	<input type="hidden" id="pipecolor" name="pipecolor" value="<?php echo $basePipe; ?>" /> 	
</form>

<form id="getName" action="" method="post">
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
					<label for="bindColorOut">Value 2 - bindColorOut </label>
					<input type="hidden" id="value2" name="bindColorOut" value="silvergrey">
					<label for="bindColorOutA">Value 2z - bindColorOutA </label>
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
						
<!-- ========================================================================================================================
#																															#
#																															#
#												top of page menu 															#
#																															#
#																															#
========================================================================================================================= -->
<div class="wrapper wrapperMobile">
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
					<input type="button" title="First Time Users, Please Read" class="blinkInfo" style="margin-bottom: 60px;" value="Step One New User Guide" id="showStepOneUserGuide"/>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<!-- empty -->
				</div>
			</div><!-- //// close row -->
		</div><!-- //// close container -->

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

		

		<div class="canvas" id="canvas">
			<!-- duplicate of the images to draw a canvas to the screen and capture the inputs on click -->
			<!-- <img src="" id="horse" class="image" /> -->

		</div>

	</article>
</div><!-- close wrapper-->

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

		// console.log(bindingColor);

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



<?php echo $chooseColorsScripts; ?>