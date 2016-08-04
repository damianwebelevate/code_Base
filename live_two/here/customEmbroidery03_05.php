<?php

// DO NOT var_dump OR ECHO ANY ELEMENTS BEFORE PAGE LOADS

// NEED A WAY TO IDENTIFY CURRENT EMBROIDERY AREA


session_start();





$area = $output = "";

if(!empty($_GET['region'])){
	$area = $_GET['region'];
}else{
	$area = "not set";

}

$output = '<input type="hidden" id="whichArea" value="'.$area.'" name="Region"/>';

$rugColor = $_SESSION['page2']['Body Color'];
$pipeColor = $_SESSION['page2']['Piping Color'];
$bindingColor = $_SESSION['page2']['Binding Color'];





?>

<?php
/*
*
* Template Name: Custom Embroidery 0305
*
*/

?>

<?php

$fontFamily = '	<ul id="fontList" class="font-list">
						<li><p data="fontFam"  title="Arial Black" class="arialBlack">Arial Black</li>
						<li><p data="fontFam" title="Arial Narrow" class="arialNarrow">Arial Narrow</li>
						<li><p data="fontFam" title="Century" class="centuryGothic">Century</li>
						<li><p data="fontFam" title="Georgia" class="georgiaTimes">Georgia</li>
						<li><p data="fontFam" title="Lucida Console" class="lucindaConsole">Lucinda</li>
						<li><p data="fontFam" title="Times new Roman" class="timesNew">Times New Roman</li>
						<li><p data="fontFam" title="Brush Script MT" class="brushScript">Brush Script</li>
					</ul>';

// FONT COLOR LIST FOR NECK					

$fontColor = '	<ul id="fontColor" class="font-color-list">
						<li>
							<li><p data="fontCol" class="mini-block" id="#F4F5F0" title="White" style="background-color: #F4F5F0;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#59497F;" title="Purple" style="background-color: #59497F;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#2A3244;" title="Navy" style="background-color: #2A3244;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#2760A7;" title="Royal Blue" style="background-color: #2760A7;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#B5CED4;" title="Light Blue" style="background-color: #B5CED4;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#315D54;" title="Hunter Green"style="background-color: #315D54;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#BBBCBC;" title="Grey" style="background-color: #BBBCBC;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#343333;" title="Black" style="background-color: #343333;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#E5D0B1" title="Cream" style="background-color: #E5D0B1;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#D8C09D;" title="Tan" style="background-color: #D8C09D;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#574634;" title="Brown" style="background-color: #574634;"></p></li>
							<li><p data="fontCol" class="mini-block" id="#6A323F;" title="Burgundy" style="background-color: #6A323F;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#C81D31;" title="Red" style="background-color: #C81D31;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#D96D39;" title="Orange" style="background-color: #D96D39;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#F2AB46;" title="Gold" style="background-color: #F2AB46;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#FFD02E;" title="Yellow" style="background-color: #FFD02E;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#00B29B;" title="Turquoise" style="background-color: #00B29B;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#E95985;" title="Hot Pink" style="background-color: #E95985;"></p></li> 
							<li><p data="fontCol" class="mini-block" id="#BBBCBC;" title="Silver" style="background-color: #BBBCBC;"></p></li>
						</li>
					</ul>';


$previewDesignLightbox = 	'<div id="previewDesign" style="display: none;">						
								<div style="height: 800px; overflow-x: scroll;" class="insidePreview">
									<div style="height: 800px;" id="maincontent">
										<h1 class="title">Your Custom Embroidery</h1>
										
									</div>
									<div id="sidebar">
										<div class="readmore gold" id="editDesign">Edit Design</div>
										<div class="readmore gold" id="tryOn">Try On Blanket</div>
									</div>							
								</div>
							</div>';


$textTip = '	<h3 class="goldText">Text Instructions</h3>
				<ul class="amy_list">
					<li>Use the button Add Text to add an empty line for your text</li>
					<li>Click inside this row to add text</li>
					<li>Move the text vertically with your cursor</li>
					<li>Select ‘Done Editing’ to deselect line of text and to add another line</li>
					<li>Font sizes are represented in real life values</li>
					<li>The larger the text the less characters can fit in a line</li>
					<li>To edit the text simply select it with your cursor</li>
					<li>To delete the text clear the contents of the box or leave empty</li>
					<li>To ensure the visibility of your Embroidery, please choose a contrasting font color to your choice of blanket color</li>
				</ul>';

$genInfo = '	<p>What you see before you is a visual representaion of the Embroidery Process carried out by our tradesmen at Triple Crown Custom</p>
				<p>The sidebar contains information and tools to help you create your embroidery.</p>
				<p>The Ring on the page is representative of the embroidery ring used in production.</p>
				<p>The inner dotted line on the ring is the boundry for the embroidery and any text/imagery outside of this boundry will not appear on your customisation</p>
				<p>The Menu across the top allows you to add Text and Embroidery and customise it to your requirements</p>
				<p>Although every effort has been made to make this as accurate as possible the interface is to give you the user a representaion of what your embroidery can look like, and is in no way meant to function as a Logo Designer</p>
				';

$imageTip = '	<h3 class="goldText">Image Instructions</h3>
				<ul class="amy_list">
					<li>Use the button Add Image from the Menu to upload an image of your embrodery (Note this opens a seperate window)</li>
					<li>The dotted line on the ring to the right represents the embroidery area</li>
					<li>Please move your image with your cursor to your desired position within the confines of the embroidery area</li>
					<li>To delete this image and upload a different logo, use the delete button that wraps the image uploaded</li>
					<li>You are limited to one image upload per Embroidery region</li>
					<li>To resize the image please use the bottom right hand corner, the resize action maintains the aspect ratio of the image</li>
					<li>We charge a base price of $50.00 for your uploaded imagery</li>
					<li>The image you upload is meant to be an image of a Logo/Crest of your Stable House/Sponsored Rider not an arbitrary image of any item.</li>
					<li>We will digitalise the logo you upload and keep it on record for future reference.</li>
				</ul>';

/* 	==========================================================================
		Breadcrumb
	==========================================================================
*/
$breadCrumb = '<ul class="bread">
				<li>
					<div class="block">
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
						<div style="width: 150px; padding-left: 5px;" class="textBox">
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
						<div style="font-weight: 600;" class="textBox">
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
						<div class="textBox greyText">
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
						<div class="textBox greyText">
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
						<div title="Next Step" id="goldTextEmbroidery" class="goldText">
							NEXT STEP
						</div>
					</div>
				</li>
			</ul>';

get_header();?>
<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
			<div class="container-fluid">
				<div id="main-content" class="main-content">
					<div id="content" class="site-content" role="main">

						<div class="wrapper wrapperMobileEmbroidery">
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
											<?php echo "<h1 class='title'><span></span>".$area." Embroidery</h1>";?>
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
								<div class="container hiddenDesktop">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<input type="button" title="First Time Users, Please Read" class="blinkInfo" value="New User Design Tool Guide" id="showUserGuideTwo"/>
										</div>
									</div><!-- //// close row -->
								</div><!-- //// close container -->								
								
<!-- ========================================================================================================================
#																															#
#																															#
#												The text itself underneeth													#
#																															#
#																															#
========================================================================================================================= -->							
								<div class="container">
									<div class="row">
										<div style="display: none;" id="userGuide">
											<article>
												<header>
													<h2 class="goldText">New User Design Tool Guide</h2>
												</header>

												<p>Welcome to our Embroidery design tool, where your blanket really comes to life!</p>
												<p>We want to give you as much control as possible when it comes to the individuality of your blanket so we have created a process which mirrors the techniques of our in house design team.</p>
												<p>It may seem quite tricky at first, but once you get the hang of it the magic comes alive!</p>

												</p>
												<h3>What am I seeing?</h3>
												<p>This is a visual representation of the Embroidery Process carried out at Triple Crown Custom.</p>
												<p>The inner dotted line represents the boundary for the embroidery design. Any text or logo which moves outside of this boundary will not appear on your blanket.</p>

												<h3>How do I use it?</h3>
												<h4>Adding Text</h4>
												<ul class="amy_list">
													<li>To add text click the ‘Add Row of Text Button’.</li>
													<li>A text box will appear inside the embroidery ring. Click inside this box to enter your text.</li>
													<li>You can move the box up and down with your cursor.</li>
													<li>The left hand tool bar displays the font editing options:
														<ul class="noList">
															<li>Font Family</li>
															<li>Font Color</li>
															<li>Font Size</li>
														</ul>
													Use the <div class="plusForDisplay">+</div> and <div class="minusForDisplay">-</div> change the font size.</li>
													<li>The larger the text the less characters can fit in a line.</li>
													<li>When you are finished editing a Row of Text select Finised Editing.</li>
												</ul>

												<h4>Adding an Image</h4>

												<ul class="amy_list">
												<li>Select the ‘upload logo’ button this will open up a new window where you can browse logo's from your own device.</li>
												<li>Please move your image with your cursor to your desired position within the confines of the embroidery area.</li>
												<li>To delete this image and upload a different logo, use the X button that wraps the image uploaded.</li>
												<li>You can enhance the size of your logo, or shrink it, by dragging the right bottom corner of your image. </li>
												<li>You are limited to one image upload per Embroidery region.</li>
												<li>The image you upload needs to be a logo design, for example your Barn logo or crest. We cannot embroider photographs. </li>
												<li>If you do not have a specific embroidery file, please upload your logo in one of the following formats (jpg, jpeg, png, gif). We will digitalise your logo for you and keep it on file for future use with Triple Crown Custom.</li>
												</ul>

												<h3>Trying on your design</h3>

												<ul class="amy_list">
													<li>Select 'Generate Image - try on' to view your design on your blanker</li>
													<li>Use the button Try On to view your design on your blanket.</li>
													<li>As the Embroidery Design Tool is a once off image generation, to edit an area please re-select and begin this process again</li>
												</ul>


												<input type="button" id="closeUserGuide" value="Hide User Guide" />
											</article>
										</div>
									</div>
								</div><!-- //// close hidden area -->

								<div class="clearfix"></div>

<!-- ========================================================================================================================
#																															#
#																															#
#												The blanket details themselves												#
#																															#
#																															#
========================================================================================================================= -->

								<div class="blueBar" class="container">
									<div class="row">
										<div class="col-md-3">
											<h4>Blanket Colors:</h4>
										</div>
										<div class="col-md-9">
											<div class="row">
												<div class="col-md-4"><?php echo "<h4>Body color: <strong>".$rugColor ."</strong></h4>";?></div>
												<div class="col-md-4"><?php echo "<h4>Binding color: <strong>".$bindingColor ."</strong></h4>";?></div>
												<div class="col-md-4"><?php echo "<h4>Piping color: <strong>".$pipeColor ."</strong></h4>";?></div>
											</div><!-- //// inner Row -->
										</div><!-- //// col-md-9 -->
									</div><!-- //// close row -->
								</div><!-- //// close blanket details -->


<!-- ========================================================================================================================
#																															#
#																															#
#												The CTA's for the page   													#
#																															#
#																															#
========================================================================================================================= -->

								<div class="container">
								<div class="row">
									<div class="row">
								        <div class="col-md-3">
								        	<div title="Return to the Embroidery Page" id="goBack">
									          <div class="goldBackTwo">&#x276E;</div>
									          <div class="goldTextHolder">
									          	<h1 class="goldText">GO BACK</h1>
									          </div>
									        </div><!-- //// go back -->
								        </div>
								        <div class="col-md-9">
								        	<div class="row">
									            <div class="col-md-12">
									            	<div class="ctaContainer">
									            	<button id="button" class="buttonEmbroideryNavy" type="submit">ADD A ROW OF TEXT <span class="a">Tt</span></button>
									      			
									            	<button id="buttonImg" class="buttonEmbroideryNavy" type="submit">ADD A LOGO <span class="b">+</span></button>
									            	</div><!-- ///// close ctaContainer -->
									            </div>
								          	</div>
								        </div>
								      </div>
									</div><!-- //// close row -->
								</div><!-- //// close upper nav bar -->

								<div class="container">
									<div class="row">
									  	<div class="col-md-9 col-md-push-3">
											<div id="maincontentTwo">

												<div class="embroideryRing">
													
													<div id="innerRing">

														
													</div><!-- //// innerRing -->

												</div><!-- //// embroideryRing -->


											</div><!-- //// close main content -->
											<div style="clear: both;"></div>
											<div class="genImageWrap hiddenMobile">
												<button class="tryOn" type="submit" id="tryOn">Generate Image - Try On</button>
											</div>
										</div><!-- //// close col-md-9 -->
										<div class="col-md-3 col-md-pull-9">
<!-- ========================================================================================================================
#																															#
#																															#
#												Side bar two container       												#
#																															#
#																															#
========================================================================================================================= -->
											<div id="sidebarTwo">
												<div class="innerSideBar">

												<!-- // removed add a line of text button and the info information underneeth -->
												<!-- // replaced with menuLeftSix -->
												<!-- ///// sixth menu -->
												<!-- the text options for the lines of text -->
												<div id="menuLeftSix" class="button_icon white" >
													<div class="fontOptsContainer">
														<!-- box 1 -->
														<!-- gone for now -->

														<!-- box 2 --> 
														<!-- font family -->
														<div id="bodyColor" class="boxContainer">
															<div class="boxHeading">
																<div class="boxHeadingText">Font Family</div>
																<div id="boxHeadingIcon" class="boxHeadingIcon"></div>
															</div>	
														</div>
														<div id="bodyColorOptions" style="display: none;" class="boxContent">
															<?php echo $fontFamily;?>
														</div>										
														<!-- ///// box 2 font family -->

														<!-- box 3 -->
														<!-- font colors -->
														<div id="bindingColor" class="boxContainer">
															<div class="boxHeading">
																<div class="boxHeadingText">Font Colors</div>
																<div id="bindingHeadingIcon" class="boxHeadingIcon"></div>
															</div>
														</div>
														<div id="bindingColorOptions" style="display: none;" class="boxContent">
															<?php echo $fontColor;?>
														</div>										
														<!-- ///// box 3 font color -->

														<!-- box 4 -->
														<!-- font size -->
														<div id="pipingColor" class="boxContainer">
															<div class="boxHeading">
																<div class="boxHeadingText">Font-Size</div>
																<div id="pipingHeadingIcon" class="boxHeadingIcon"></div>
															</div>	
														</div>
														<div id="pipingColorOptions" style="display: none;" class="boxContent">
															<div id="minus">-</div>
															<div id="plus">+</div>
															<div class="sees"><p><span id="userSees">1</span> inch</p></div>
															<div style="clear: both;"></div>
															<input type="hidden" id="currentValue" />
														</div>

														<div class="hiddenDesktop">
															<div id="mobileTryOn" class="readmore gold">Next Step</div>
														</div>

													</div><!-- box for the font size -->

												</div><!-- /// button_icon menu six-->

												<!-- // deleted the upload a logo button -->
												<!-- replaced it with the menuLeftSeven -->
												<!-- ///// fifth menu -->
												<!-- IMAGE MENU where the text and image information show -->
												<div id="menuLeftSeven" style="display: none;" class="button_icon white" >
													<div class="wrapCloseMenu">
														<div id="closeMenuSeven" class="closeMenu">X</div>
													</div>

														<!-- // hide show -->
													<div class="fontOptsContainer">
														<!-- // hide show -->
														<div style="display: none;" id="hideItShowIt">
															<div class="progress_bar">

															    <div  class="fill" id="fill">

															        <div class="fill_text" id="fill_text">

															        </div>

															    </div>

															</div>

															<div id="hidden_a"></div>  

															<div id="to_show"></div>

														</div><!-- ///// hide show div do not move!!! -->
													</div><!-- //// fontOptsContainer -->
												</div><!-- /// button_icon -->

												<form id="gatherValues" method="post" action="https://triplecrowncustom.com/wp-content/themes/triple/site/captureEmbroideryDetails.php">
													<!-- to see this hiddenElement value in the post array put back the name attribute = hiddenElement -->
													<input type="hidden" value="1" id="hiddenElement" />
													<?php echo $output; ?>
													<input style="display: none;"type="number" value="0.00" id="<?php echo $area; ?>_Total_For_Text" name="total_for_text" />
													<label style="display: none;" id="widthLabel">Image Width(inches)</label>
													<input style="display: none;" type="hidden" value="empty" id="imgWidth">

													<label style="display: none;" id="heightLabel" >Image Height(inches)</label>
													<input style="display: none;" type="hidden" value="empty" id="imgHeight">

													<label style="display: none;" id="sourceLabel">Image Uploaded Path</label>
													<input style="display: none;" type="hidden" id="imageSource" value="empty">

													<label style="display: none;" id="generatedImageLabel">Generated Image Path</label>
													<input id="generatedImage" type="hidden" value="empty">
												</form>

												
												<div class="flashyEmbroidery hiddenMobile" id="showUserGuide">New User Design Tool Guide</div>
													

											</div><!-- /close innersidebar-->
										
									</div><!-- close sidebar -->
										</div><!-- //// close col-md-3 -->
									</div><!-- //// close row -->
								</div><!-- close container -->

								<div class="clearfix"></div>


<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ 
+                                                                                                                
+                                                Upload                                                         
+
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->


<div style="display: none;" class="container">
	<!-- http://damianorourke.com/resources/PHP/upload/upload.php -->
    <!-- https://triplecrowncustom.com/wp-content/themes/triple/site/uploads/upload.php -->
		
		<form id="form" action="https://triplecrowncustom.com/wp-content/themes/triple/site/uploads/upload.php" method="post" enctype="multipart/form-data">

	        <label for="file_upload_normal">Select Upload:</label>

	        <input onchange="ValidateSingleInput(this);" type="file" name="files[]" id="file_upload_normal" />

	        <input class="btn btn-success" type="submit" name="Go" namevalue="Upload Files" id="normal_upload_submit"/>

		</form>
		
</div>



<!-- set a destination for the image after generation -->
<!-- important do not delete output of canvas here -->
<img style="display: none;" src="" style="width: 128px; height: auto;" id="imageOutOut" />
<div style="display: none;" id="img-out"></div>


<!-- this is to determine the PPI of the screen -->
<div id="ppitest" style="width:1in;visible:hidden;padding:0px"></div>


<div style="clear: both;"></div>
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
<script>

var rotation = 0;

$j.fn.rotation = function(degrees) {
    $j(this).css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
                 '-moz-transform' : 'rotate('+ degrees +'deg)',
                 '-ms-transform' : 'rotate('+ degrees +'deg)',
                 'transform' : 'rotate('+ degrees +'deg)'});
    return $j(this);
};

// show user guide 

$j('#showUserGuide, #showUserGuideTwo').on("click", function(){
	$j('#userGuide').show();
});

$j('#closeUserGuide').on("click", function(){
	$j('#userGuide').hide();
});
</script>


<script>

function placeCaretAtEnd(el) {
	el.click();
    el.focus();
    if (typeof window.getSelection != "undefined"
            && typeof document.createRange != "undefined") {
        var range = document.createRange();
        range.selectNodeContents(el);
        range.collapse(false);
        var sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
    } else if (typeof document.body.createTextRange != "undefined") {
        var textRange = document.body.createTextRange();
        textRange.moveToElementText(el);
        textRange.collapse(false);
        textRange.select();
    }
}


function roundToHalf(value) { 
   var converted = parseFloat(value); // Make sure we have a number 
   var decimal = (converted - parseInt(converted, 10)); 
   decimal = Math.round(decimal * 10); 
   if (decimal == 5) { return (parseInt(converted, 10)+0.5); } 
   if ( (decimal < 3) || (decimal > 7) ) { 
      return Math.round(converted); 
   } else {
      return (parseInt(converted, 10)+0.5); 
   } 
} 



function getTextSize(value){
	// get the widht of the embroideryRing as this is the exact width needed for the maths to work
		// the innerRing is not accurate enough and produces two different results from both jquery and js
		// use native js as this will give a value without px appended
		var elem = document.getElementsByClassName('embroideryRing')[0];
		var details = elem.getBoundingClientRect();
		// get the width of the embroideryRing to determine the % difference in the rings width
		var actualWidth = details.width;
		// get the height of the embroideryRing to set a maxHeight Value
		var actualHeight = details.height;
		var nActualHeight = roundToHalf(actualHeight);
		var minimum = roundToHalf(nActualHeight / 11);
		// console.log("the "+ nActualHeight +" divided by 11 - is the number of 1inch rows as it is 11 inches high: "+minimum);
		// rate of increase||decrease is the minimum /2 which represents a half inch
		var rate = minimum / 2;
		var nRate = Number(rate);
		// console.log("set the actual height to a value that is appropriate for the screen size, then use this value to set the default font size: " +nRate);
		var maximum = Number(11);
		var nMinimum = Number(1);

		return {minimum: nMinimum, maximum: maximum, rate: nRate, maxHeight: nActualHeight, minHeight: minimum};
};

	$j('#plus').on("click", function(){

			var active = $j('.active');
			if(active){

			// get the settings from above and use them for increase/decrease:
			// minimum | maximum | rate
			var numbers = getTextSize();
			var maximum = numbers.maximum;
			var maxHeight = numbers.maxHeight;
			var minimum = numbers.minimum;
			var rate = numbers.rate;

			// console.log(typeof rate);

			// the hidden element thats on the page:
			$j('#currentValue').val(minimum);

			// calc the rate of increase in inches and show the user the inch value		
			var elem = document.getElementById('userSees');
			var elemHtml = elem.innerHTML;
			var currentInch = parseFloat(elemHtml);
			var rateInch = 0.5;
			currentInch += rateInch;


			var activeID = $j('.active').attr("id");
			var container = "container_"+activeID;

			var jsContainer = document.getElementById(container);
			var currentTitle = parseFloat($j(jsContainer).attr("title"));		

			var sum = parseFloat(currentTitle += rateInch);
			// console.log("title: "+currentTitle);
			// console.log("sum after plus: "+sum);

			var current = $j('.active').css("font-size");
			var noPx = Number(current.replace("px", ""));
			var newFont = rate + noPx;

			// console.log("+++++ New Font: ++++");
			// console.log(typeof newFont);
			// console.log("+++++ maxHeight: ++++");
			// console.log(typeof maxHeight);

			var bool = sum < maximum ? sum <= maximum : sum = maximum;

			if(bool == 11){
				$j(jsContainer).attr("title", maximum);
				newFont = maxHeight;
				$j('.active').css("font-size", maxHeight+"px");
				$j('#currentValue').val(maxHeight);
				$j('#userSees').text("11");				
			}else{
				$j(jsContainer).attr("title", sum);
				// console.log("after if:- NewFont: "+newFont);
				$j('.active').css("font-size", newFont+"px");
				$j('#currentValue').val(newFont);
				// console.log("font size: "+newFont);
				$j('#userSees').text(currentInch);
			}

		}else{
			// do nothing
		}


	});

	$j('#minus').on("click", function(){

			var active = $j('.active');
			if(active){
			
			// get the settings from above and use them for increase/decrease:
			// minimum | maximum | rate
			var numbers = getTextSize();
			var maximum = numbers.maximum;
			var minHeight = numbers.minHeight;
			var minimum = numbers.minimum;
			var rate = numbers.rate;

			// calc the rate of increase in inches and show the user the inch value		
			var elem = document.getElementById('userSees');
			var elemHtml = elem.innerHTML;
			var currentInch = parseFloat(elemHtml);
			var rateInch = 0.5;
			currentInch -= rateInch;

			var activeID = $j('.active').attr("id");
			var container = "container_"+activeID;
			var jsContainer = document.getElementById(container);
			var currentTitle = parseFloat($j(jsContainer).attr("title"));

			// console.log("++++++++");
			// console.log(typeof currentTitle);
			// console.log("value of the title: "+currentTitle);
			// console.log("++++++++");

			// console.log("rate of decrease: "+rate);

			var current = $j('.active').css("font-size");
			var noPx = Number(current.replace("px", ""));
			var newFont = (rate - noPx)*-1;

			// console.log("********");
			// console.log("New Font Value: "+newFont);
			// console.log("********");

			var bool2 = newFont > minHeight ? newFont >= minHeight : newFont = minHeight;

			// console.log("comparison of newFont vs minHeight: "+bool2);

			$j(jsContainer).attr("title", currentInch);

			// console.log("after if:- NewFont: "+newFont);

			$j('.active').css("font-size", newFont+"px");
			$j('#currentValue').val(newFont);

			$j('#userSees').text(currentInch);
			// console.log("font size: "+newFont);
			// console.log("user sees: "+currentInch);

			if(bool2 == 48){
				$j(jsContainer).attr("title", minimum);
				$j('.active').css("font-size", minHeight+"px");
				$j('#currentValue').val(minHeight);
				$j('#userSees').text("1");		
			}
		}else{
			// do nothing
		}
		
	});




</script>


<script type="text/javascript">

// $('#tagMenu').on("mouseover", function(){

// 	$('#menuLeft').animate().scrollLeft(200);
// });

$j("#tagMenu").on("click", function(){
    $j("#menuLeft").toggle("slow");
});

$j("#closeMenu").on("click", function(){
	$j("#menuLeft").hide("slow");
});


$j("#tagMenuTwo").on("click", function(){
    $j("#menuLeftTwo").toggle("slow");
});

$j("#closeMenuTwo").on("click", function(){
	$j("#menuLeftTwo").hide("slow");
});

$j("#tagMenuThree").on("click", function(){
    $j("#menuLeftThree").toggle("slow");
});

$j("#closeMenuThree").on("click", function(){
	$j("#menuLeftThree").hide("slow");
});

// $j("#tagMenuFive").on("click", function(){
//     $j("#menuLeftFive").toggle("slow");
// });

// $j("#closeMenuFive").on("click", function(){
// 	$j("#menuLeftFive").hide("slow");
// });

$j("#buttonImg").on("click", function(){
    $j("#menuLeftSeven").show("slow");
});

$j("#closeMenuSeven").on("click", function(){
	$j("#menuLeftSeven").hide("slow");
});


</script>

<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/ajax_upload.js"></script>
<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/upload.js"></script>

<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/html2canvas.js"></script>

<script src="https://triplecrowncustom.com/wp-content/themes/triple/js/script.js"></script>

<script type="text/javascript">
	
$j(function(){

// WebKit contentEditable focus bug workaround:
if(/AppleWebKit\/([\d.]+)/.exec(navigator.userAgent)) {

var editableFix = $j('<input style="width:1px;height:1px;border:none;margin:0;padding:0;" tabIndex="-1">').appendTo('html');
$j('[contenteditable]').blur(function () {
editableFix[0].setSelectionRange(0, 0);
editableFix.blur();
});
}
});

</script>
<script>
 

window.onload=function(){
	// give elements an identifier and human readable name
	var val = $j('#whichArea').val();
	$j('#widthLabel').attr("for", val+"_Image_Width");
	$j('#imgWidth').attr("name", val+"_Image_Width");

	$j('#heightLabel').attr("for", val+"_Image_Height");
	$j('#imgHeight').attr("name", val+"_Image_Height");

	$j('#sourceLabel').attr("for", val+"_Image_Upladed_Source");
	$j('#imageSource').attr("name", val+"_Image_Uploaded_Source");

	$j('#generatedImageLabel').attr("for", val+"_Generated_Image_DataToURL");
	$j('#generatedImage').attr("name", val+"_Generated_Image_DataToURL");
}  


var imageUp = document.getElementById('buttonImg').addEventListener("click", function(){
	var val = $j('#whichArea').val();
	$j('#widthLabel').attr("for", val+"_Image_Width");
	$j('#imgWidth').attr("name", val+"_Image_Width");

	$j('#heightLabel').attr("for", val+"_Image_Height");
	$j('#imgHeight').attr("name", val+"_Image_Height");

	$j('#sourceLabel').attr("for", val+"_Image_Upladed_Source");
	$j('#imageSource').attr("name", val+"_Image_Uploaded_Source");

	$j('#generatedImageLabel').attr("for", val+"_Generated_Image_DataToURL");
	$j('#generatedImage').attr("name", val+"_Generated_Image_DataToURL");
	$j('#fill').css("width", "0px");
	$j('#imageTip, #hideItShowIt').show();
	openDialog();
});

function openDialog(){
	var x = document.getElementById('file_upload_normal');
	x.click();

	var w = setInterval(function(y){
		var x = document.getElementById('file_upload_normal').value;

		if(x){

			clearInterval(w);
			document.getElementById('normal_upload_submit').click();
			document.getElementById('form').reset();
		}

		document.getElementById('form').reset();
		
	}, 1000);

}


// stolen from internet
var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png", ".JPEG"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                $j('#hideItShowIt').hide();
                return false;
            }
        }
    }
    return true;
}


function myFunction(){

	var source = $j('#upImage').attr("title");

	$j('#menuLeftSeven').hide();

	$j('#imageSource').val(source);

	$j('#imageSource').show();

	$j('#file_upload_normal').val("");

	$j('#buttonImg').attr("disabled", true);

	var imgWidth = $j('#upImage').width()*2;
	var imgHeight = $j('#upImage').height()*2;
	// $j('#widthLabel, #heightLabel, #sourceLabel').show();
	$j('#imgWidth').show().val(pxToInches(imgWidth));
	$j('#imgHeight').show().val(pxToInches(imgHeight));
	$j('#hideItShowIt').hide();
	$j('#upImage').resizable({
		aspectRatio: true,
		resize: function(event, ui){
			var size = ui.size;
			var newWidth = size.width;
			var newHeight = size.height;
			

			$j('#imgWidth').val(pxToInches(newWidth*2));
			$j('#imgHeight').val(pxToInches(newHeight*2));	

		}

	});

	$j('#hipWrap').draggable({
		containment: ".embroideryRing",
		scroll: false
	});



	$j('#deleteImage').on("click", function(){
		$j('#upImage').remove();
		$j('#hipWrap').remove();
		$j(this).remove();
		$j('#imageSource').val("").hide();
		$j('#imageTip').hide();
		$j('#buttonImg').attr("disabled", false);
		$j('#imgWidth, #imgHeight').val("empty").hide();
		$j('#widthLabel, #heightLabel, #sourceLabel').hide();
		$j('#hidden_a').empty();
		$j('#fill').css("width", "0px");
		$j('#menuLeftSeven').hide("slow");
	});

};



function pxToInches(param){
	var screenPPi = document.getElementById('ppitest').offsetWidth;

	// Pixels = Inches * PPI
	// Inches = Pixesl * PPI

	var value = param / screenPPi;
	value = value.toFixed(3);
	// value += " inches";

	return value;
}


// rgb to hex
function rgb2hex(orig){
 var rgb = orig.replace(/\s/g,'').match(/^rgba?\((\d+),(\d+),(\d+)/i);
 return (rgb && rgb.length === 4) ? "#" +
  ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : orig;
}

// object returns a div with the id of container_+number
// the title is appended to the container along with the textarea and the "close" text area
// giveMeFocus is to allow the cursor to be in the textArea
// inDomOne is the container that is movable
// title is the "wrap_+number" that shows the title hidden on done
// done is the "done_+number" to finish editing row

var addRow = document.getElementById("button").addEventListener("click", function(){

	this.setAttribute("disabled", "true");
	// $j('#textTip').show();
	var area = document.getElementById("innerRing");
	var hidden = document.getElementById("hiddenElement");
	var curVal = hidden.value;
	var form = document.getElementById("gatherValues");
	// create a new instance of the TextEditor
	var textBox = new TextEditor();
	area.appendChild(textBox.addElement(curVal));

	// get a reference to the area 
	var whichArea = document.getElementById("whichArea").value;

	var inDomOne = document.getElementById('container_'+curVal);
	// give the container an attribute value of title and pass the rate of increase in inches to it on plus/minus
	inDomOne.setAttribute("title", 1);
	var giveMeFocus = document.getElementById(curVal);
	var title = document.getElementById("title_"+curVal);
	var done = document.getElementById("Done_"+curVal);

	// new element just to hide it
	var newDone = document.getElementById("Close_"+curVal);

	$j(inDomOne).draggable({ 
		containment: ".embroideryRing", 
		scroll: false   
	});


	// capture the number of the row
	// capture the color
	// capture the font-family selected
	// capture the text entered
	// capture the font-size
	// create the hidden elements
	// use reference to whichArea value to create "human readable" names for the server and create the element in the dom
	var textRowElem = textBox.addHiddenField(whichArea+"_Text_Row_Number_"+curVal, "Text Row: ", curVal);
	var colorElem = textBox.addHiddenField(whichArea+"_Row_"+curVal+"_Font_Color_Selected", "Font Color: ", "Black");
	var familyElem = textBox.addHiddenField(whichArea+"_Row_"+curVal+"_Font_Family_Selected", "Font Family: ", "Arial");
	var textElem = textBox.addHiddenField(whichArea+"_Row_"+curVal+"_Text_Entered", "Text Entered: ", "NULL");
	var fontSizeElem = textBox.addHiddenField(whichArea+"_Row_"+curVal+"_Font_Size_Selected", "Font Size: ", "1.00");
	var rate = textBox.addHiddenField(whichArea+"_Font_Rate_"+curVal+"_$", "Font Rate: ", "1");
	var charge = textBox.addHiddenField(whichArea+"_Font_Charge_Row_"+curVal+"_$", "Font Charge: ", "");

	// add them to the dom
	var toAdd = document.createDocumentFragment();
	toAdd.appendChild(textRowElem);
	toAdd.appendChild(colorElem);
	toAdd.appendChild(familyElem);
	toAdd.appendChild(textElem);
	toAdd.appendChild(fontSizeElem);
	toAdd.appendChild(rate);
	toAdd.appendChild(charge);

	form.appendChild(toAdd);

	// get a reference to them
	var textOutput = document.getElementById(whichArea+"_Text_Row_Number_"+curVal);
	var colorOutput = document.getElementById(whichArea+"_Row_"+curVal+"_Font_Color_Selected");
	var familyOutput = document.getElementById(whichArea+"_Row_"+curVal+"_Font_Family_Selected");
	var textElemOutput = document.getElementById(whichArea+"_Row_"+curVal+"_Text_Entered");
	var fontSizeElemOutput = document.getElementById(whichArea+"_Row_"+curVal+"_Font_Size_Selected");
	var getCurRate = document.getElementById(whichArea+"_Font_Rate_"+curVal+"_$");
	var outputCharge = document.getElementById(whichArea+"_Font_Charge_Row_"+curVal+"_$");
	$j(outputCharge).attr("data", "charge");
	// hide controls
	// capture values
	// do more edits !!!!

	$j(done).bind("click touchstart", function(){

		$j(this).css("visibility", "hidden");
		$j(newDone).css("visibility", "hidden");
		$j(title).css("visibility","hidden");
		// $j('.bigGoldBoxTwo, .newDone').css("visibility", "hidden");
		$j(inDomOne).draggable("disable");
		// $j(giveMeFocus).toggleClass("active");
		$j(giveMeFocus).attr("contenteditable", false);
		$j(giveMeFocus).removeClass("active");
		$j(giveMeFocus).blur();
		// $j('#menuLeftSix').hide("slow");
		$j(colorOutput).val( getFontColorFromHex(rgb2hex($j(giveMeFocus).css("color"))+";"));
		$j(familyOutput).val($j(giveMeFocus).css("font-family"));

		// for the font size
		// get the value of it via css
		// *2 for real size
		// reset the userSees value to its initial state
		$j('#userSees').text("1");
		var sizeFont = parseFloat($j(inDomOne).attr("title"));
		
		$j(fontSizeElemOutput).val(sizeFont);

		$j(getCurRate).val(sizeFont);

		// console.log("outputted rate after math: "+$j(getCurRate).val());

		// $j(fontSizeElem).val($j(giveMeFocus).css("font-size"));
		$j('#button').attr("disabled",false);

		// check to see if the element is empty
		// console.log($j(giveMeFocus).html());
		// console.log($j(giveMeFocus).html().length);

		if($j(giveMeFocus).text().length === 0){
			// row number and label remove
			$j(inDomOne).remove();
			$j(this).remove();

			var textRowId = textOutput.id;
			var string = "[for='"+textRowId+"']";
			$j(string).remove();
			$j(textOutput).remove();
			
			// color value and label remove
			var colorOutputId = colorOutput.id;
			var string2 = "[for='"+colorOutputId+"']";
			$j(string2).remove();
			$j(colorOutput).remove();

			var familyOutputId = familyOutput.id;
			var string3 = "[for='"+familyOutputId+"']";
			$j(string3).remove();
			$j(familyOutput).remove();

			var textElemOutputId = textElemOutput.id;
			var string4 = "[for='"+textElemOutputId+"']";
			$j(string4).remove();
			$j(textElemOutput).remove();

			var fontSizeElemOutputId = fontSizeElemOutput.id;
			var string5 = "[for='"+fontSizeElemOutputId+"']"; 
			$j(string5).remove();

			var fontSizeElemOutputId = fontSizeElemOutput.id;
			var string6 = "[for='"+fontSizeElemOutputId+"']";
			$j(string6).remove();
			$j(fontSizeElemOutput).remove();

			var removeFontRate = getCurRate.id;
			var string7 = "[for='"+removeFontRate+"']";
			$j(string7).remove();
			$j(getCurRate).remove();

			var removeFontCharge = outputCharge.id;
			var string8 = "[for='"+removeFontCharge+"']";
			$j(string8).remove();
			$j(outputCharge).remove();


			$j(this).remove();
			$j(giveMeFocus).remove(); 
			$j(title).remove();

			var val = $j('#hiddenElement').val();
			val -= 1;
			$j('#hiddenElement').val(val);

			


		}else{
			$j('#userSees').text("1");
			var text = $j(textElemOutput).val();
			var len = text.length;
			// console.log("the length of the text box" +len);

			var pattern = " ";
			
			var newText = text.trim().replace(/ /g,'').replace(/\s+$/,'');

			// newTextTwo = newText.replace(/\s+$/, '');
			var newLen = newText.length;


			var curRate = Number($j(fontSizeElemOutput).val());

			// console.log(curRate);

			var total = newLen * curRate;

			$j(outputCharge).val(total.toFixed(2));
		}
		// var a = document.getElementsByClassName('fontSize')[0];
		// $j("#fontSize").prop("click", function(){
		// 	$j(this).prop('selectedIndex',0);
		// });
	});


	// show controls
	$j(giveMeFocus).bind("click touchstart",function(){
		var ident = $j(this).attr("id");
		var x = document.getElementById(ident);
		placeCaretAtEnd(x);

		$j(this).addClass("active");
		$j(this).attr("contenteditable", true);
		$j(title).css("visibility", "visible");
		$j(done).css("visibility", "visible");
		$j(newDone).css("visibility", "visible");
		$j('#button').attr("disabled", true);
		$j(inDomOne).draggable("enable");
		// $j('#menuLeftSix').show("slow");
		$j('#userSees').text($j(inDomOne).attr("title"));
});

$j(giveMeFocus).on("keyup", function(evt){
	$j(textElemOutput).val($j(this).text());
});


$j(giveMeFocus).on("keydown", function(evt){
	if(evt.keyCode === 13){
		evt.preventDefault();
	}

});


curVal++;
hidden.value = curVal;

});
</script>

<script>

$j('#fontList li>p').on("click", function(evt){
	var style = $j(this).attr("class");
	
// alert(style);

	var arrs = ['arialBlack', 'arialNarrow', 'centuryGothic', 'georgiaTimes', 'lucindaConsole', 'timesNew', 'brushScript', 'none'];

	for(var i = 0; i <= arrs.length; i++){
		if(!($j('.active').hasClass(arrs[i]) || $j('.active').hasClass(style))){

			$j('.active').addClass(style);

		}else{
			$j('.active').removeClass(arrs[i]);
		}
	}



});



$j('#fontColor li>p').on("click", function(evt){
	var style = $j(this).attr("id");
	// var activated = $j('#hiddenElement').val();
	// activated-=1;
	// console.log(activated);
	// var elem = document.getElementById("color_"+activated);
	// $j(elem).val(style);
	$j('.active').css("color", style);
});

</script>

<script>

function getFontColorFromHex(hex){

	var newHex = hex.toUpperCase();
	switch(newHex){
	case "#F4F5F0;":
		return "White";
		break;
	case "#59497F;":
		return "Purple";
		break;
	case "#2A3244;":
		return "Navy";
		break;
	case "#2760A7;":
		return "Royal Blue";
		break;
	case "#B5CED4;":
		return "Light Blue";
		break;
	case "#315D54;":
		return "Huntergreen";
		break;
	case "#BBBCBC;":
		return "Grey";
		break;
	case "#343333;":
		return "Black";
		break;
	case "#E5D0B1;":
		return "Cream";
		break;
	case "#D8C09D;":
		return "Tan";
		break;
	case "#574634;":
		return "Brown";
		break;
	case "#6A323F;":
		return "Burgundy";
		break;
	case "#C81D31;":
		return "Red";
		break;
	case "#D96D39;":
		return "Orange";
		break;
	case "#F2AB46;":
		return "Gold";
		break;
	case "#FFD02E;":
		return "Yellow";
		break;
	case "#00B29B;":
		return "Turquoise";
		break;
	case "#E95985;":
		return "Hot Pink";
		break;
	case "#BBBCBC;":
		return "Silver";
		break;

	default:
	return "Black";
	}
}


// box 1

$j('#textTipButton').on("click", function(){
	$j('#textTipArea').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#textTipIcon').toggleClass("boxHeadingIconMinus");
});
// close box 1
$j('#closeTextTipTwo').on("click", function(){
	$j('#textTipArea').hide();
	$j('#textTipIcon').toggleClass("boxHeadingIconMinus");
	$j('#textTipButton').toggleClass("boxContainerGold");
});

// box 2

$j('#bodyColor').on("click", function(){
	$j('#bodyColorOptions').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#boxHeadingIcon').toggleClass("boxHeadingIconMinus");
});

// box 3

$j('#bindingColor').on("click", function(){
	$j(this).toggleClass("boxContainerGold");
	$j('#bindingColorOptions').toggle();
	$j('#bindingHeadingIcon').toggleClass("boxHeadingIconMinus");
});

// box 4

$j('#pipingColor').on("click", function(){
	$j('#pipingColorOptions').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#pipingHeadingIcon').toggleClass("boxHeadingIconMinus");
});

// box 5

$j('#rotation').on("click", function(){
	$j('#rotationOptions').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#rotationOptionsIcon').toggleClass("boxHeadingIconMinus");
});

// box 6

$j('#imageInfoButton').on("click", function(){
	$j('#imageInfoHidden').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#imageInfoIcon').toggleClass("boxHeadingIconMinus");
});


// box 7
$j('#imageInfoButtonTwo').on("click", function(){
	$j('#imageInfoHiddenTwo').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#imageInfoIconTwo').toggleClass("boxHeadingIconMinus");
});
// close box 7
$j('#closeImageTip').on("click", function(){
	$j('#imageInfoHiddenTwo').hide();
	$j('#imageInfoIconTwo').toggleClass("boxHeadingIconMinus");
	$j('#imageInfoButtonTwo').toggleClass("boxContainerGold");
	$j('.generalInfo').scrollTop(-400);
});


// box 8
$j('#textTipButtonTwo').on("click", function(){
	$j('#textTipAreaTwo').toggle();
	$j(this).toggleClass("boxContainerGold");
	$j('#textTipIconTwo').toggleClass("boxHeadingIconMinus");
});
// close box 8
$j('#closeTextTip').on("click", function(){
	$j('#textTipAreaTwo').hide();
	$j('#textTipIconTwo').toggleClass("boxHeadingIconMinus");
	$j('#textTipButtonTwo').toggleClass("boxContainerGold");
	$j('.generalInfo').scrollTop(-400);
});



$j(function() { 
    $j("#viewOrder, #tryOn, #goBack, #mobileTryOn").click(function() {

    	$j('.doneEditing').each(function(i,n){
    		$j(n).click();
    	});

    	$j('#canvasImage').remove();
    	$j('#deleteImage').css("visibility", "hidden");
        html2canvas($j("#innerRing"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                // document.body.appendChild(canvas);

                // Convert and download as image 
                // Canvas2Image.saveAsPNG(canvas);
                
                $j("#img-out").append(canvas);
                $j("#img-out>canvas").attr("id","canvasImage");
                // $j('body').append($j('#previewDesign').show());
                renderCanvasToImage();
            }
        });
    });
}); 


$j('#editDesign').on("click", function(){
	$j('#previewDesign').hide();
	$j('canvas').remove();
	$j('#deleteImage').css("visibility", "visible");
});


// try on blanket on click does all of that might remove some of the functionality
// submit the form with the click

function renderCanvasToImage(){

	var can = document.getElementsByTagName("canvas")[0];
	var source = can.toDataURL("image/png", 1);
	var out = document.getElementById("imageOutOut");
	out.src = source;
	$j('#generatedImage').val(source);
	// $j('#previewDesign').hide();
	// $j('#deleteImage').css("visibility", "visible");
	// $j('#generatedImageLabel').show();

	var valOne = $j('#imgWidth').val();
	var valTwo = $j('#imgHeight').val();
	var valThree = $j('#imageSource').val();

	getTotalText();

	if(valOne == 'empty'){
		$j('#imgWidth').attr("name", "");
		$j('#imgHeight').attr("name", "");
		$j('#imageSource').attr("name", "");
	}else{
		$j('#gatherValues').submit();
	}
	$j('#gatherValues').submit();
	
}



function getTotalText(){
	var total = 0.00;
	$j('input[data="charge"]').each(function(i, n){
		// alert($j(n).val());
		total += parseFloat($j(n).val());
	});
	// alert("total: "+total.toFixed(2));
	var out = $j('#whichArea').val();

	var getArea = document.getElementById(out+"_Total_For_Text");
	$j(getArea).val(total.toFixed(2));
};



// $j('#cancel, #goBack').on("click", function(){
// 	var x = window.confirm("By leaving this page you will loose all of your changes. \n\nAre you sure you want to leave this page?");

// 	if(x){
// 		window.location = window.location.href + "#refresh";
// 		location.reload();
// 	}
	
	
// });


$j(document).ready(function(){
	var x = window.location.href;
	if(!(x.search('#refresh') == -1)){
		document.getElementById('gatherValues').submit();
	}
});

</script>







<?php
get_footer();


