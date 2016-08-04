<?php 
require dirname(__FILE__).'/../includes/embroideryIncludes.php';
$area = "Center";
$output = '<input type="hidden" id="whichArea" value="'.$area.'" name="Region"/>';

$rugColor = "red";
$bindingColor = "navy";
$pipeColor = "yellow";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Center Region</title>
<?php echo $head; ?>
</head>
<body>

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

												<form id="gatherValues" method="post" action="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/captureEmbroideryDetails.php">
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
													<input style="display: none;" id="generatedImage" type="hidden" value="empty">
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
    <!-- http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/uploads/upload.php -->
		
		<form id="form" action="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/uploads/upload.php" method="post" enctype="multipart/form-data">

	        <label for="file_upload_normal">Select Upload:</label>

	        <input onchange="ValidateSingleInput(this);" type="file" name="files[]" id="file_upload_normal" />

	        <input class="btn btn-success" type="submit" name="Go" namevalue="Upload Files" id="normal_upload_submit"/>

		</form>
		
</div>



<!-- set a destination for the image after generation -->
<!-- important do not delete output of canvas here -->
<img src="" style="display: none;" id="imageOutOut" />
<div id="img-out"></div>


<!-- this is to determine the PPI of the screen -->
<div id="ppitest" style="width:1in;visible:hidden;padding:0px"></div>


<div style="clear: both;"></div>
</article>


<input type="button" id="normal_upload_submit" />
<input type="button" value="Close" id="close" />

<input type="text" />

</div><!-- //// close parent wrapper -->


<script type="text/javascript">
	(function(){

		var close = document.getElementById("close");
		
		close.addEventListener("click", function(event){
			window.parent.document.getElementById("centerIframeHolder").style.display = "none";
			window.parent.document.getElementById("initial").style.display = "block";
		});

		var goBack = document.getElementById("goBack");

		goBack.addEventListener("click", function(event){
			window.parent.document.getElementById("centerIframeHolder").style.display = "none";
			window.parent.document.getElementById("initial").style.display = "block";
		});
		
	})();
</script>

<?php echo $embroiderySripts; ?>

</body>
</html>