<?php

// set of variables for the breadcrumb
$colorsId = 'id="getColors"';
$onToEmbroidery = 'id="onToEmbroidery"';
$backToColors = 'id="backToColors"';


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


/* 	==========================================================================
		Breadcrumb
	==========================================================================
*/
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

/* 	==========================================================================
		Add text - Breadcrumb
	==========================================================================
*/
$addTextBreadCrumb = '<ul class="bread">
				<li>
					<div title="Choose Your Colors" '.$backToColors.'class="block">
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

$head = ' 	<meta name="viewport" content="width=device-width, user-scalable=yes">
			<meta charset="UTF-8">
			<link rel="stylesheet" id="structure-css"  href="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/inc/css/jquery-ui.structure.min.css" type="text/css" media="all" />
			<link rel="stylesheet" id="bootstrap_css_hosted-css"  href="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/inc/css/bootstrap_external.css" type="text/css" media="all" />
			<link rel="stylesheet" id="playfair-css"  href="http://fonts.googleapis.com/css?family=Playfair+Display+SC%3A400%2C700&#038;" type="text/css" media="all" />
			<link rel="stylesheet" id="opensans-css"  href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C800%2C600&#038;" type="text/css" media="all" />
			<link rel="stylesheet" id="run_custom_rug_css-css"  href="http://triplecrowncustom.com/wp-content/themes/triple/css/main.css" type="text/css" media="all" />
			<link rel="stylesheet" id="responsive_css-css"  href="http://triplecrowncustom.com/wp-content/themes/triple/css/responsive.css" type="text/css" media="all" />
			<link rel="stylesheet" href="http://dev.triplecrowncustom.com/app/css/iframeStyles.css" type="text/css" media="all" />
			<script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/jquery_latest.js"></script>
			<script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/jqueryui.js"></script>
			<script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/touchPunch.js"></script>
			<script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/some.js"></script>
			<script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/app.js"></script>';

$scripts = '	<script type="text/javascript" src="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/js/ajax_upload.js"></script>
				<script type="text/javascript" src="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/js/upload.js"></script>
				<script type="text/javascript" src="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/js/html2canvas.js"></script>
				<script type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/script.js"></script>
				<script type="text/javascript" type="text/javascript" src="http://dev.triplecrowncustom.com/app/js/addEmbroidery.js"></script>';

$embroideryMessage = "	
<!-- ========================================================================================================================
#																															#
#																															#
#										The information for the embroidery ring												#
#																															#
#																															#
========================================================================================================================= -->							
<div class='container'>
	<div class='row'>
		<div style='display: none;' id='userGuide'>
			<article>
				<header>
					<h2 class='goldText'>New User Design Tool Guide</h2>
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
				<ul class='amy_list'>
					<li>To add text click the ‘Add Row of Text Button’.</li>
					<li>A text box will appear inside the embroidery ring. Click inside this box to enter your text.</li>
					<li>You can move the box up and down with your cursor.</li>
					<li>The left hand tool bar displays the font editing options:
						<ul class='noList'>
							<li>Font Family</li>
							<li>Font Color</li>
							<li>Font Size</li>
						</ul>
					Use the <div class='plusForDisplay'>+</div> and <div class='minusForDisplay'>-</div> change the font size.</li>
					<li>The larger the text the less characters can fit in a line.</li>
					<li>When you are finished editing a Row of Text select Finised Editing.</li>
				</ul>

				<h4>Adding an Image</h4>

				<ul class='amy_list'>
				<li>Select the /‘upload logo/’ button this will open up a new window where you can browse logo/'s from your own device.</li>
				<li>Please move your image with your cursor to your desired position within the confines of the embroidery area.</li>
				<li>To delete this image and upload a different logo, use the X button that wraps the image uploaded.</li>
				<li>You can enhance the size of your logo, or shrink it, by dragging the right bottom corner of your image. </li>
				<li>You are limited to one image upload per Embroidery region.</li>
				<li>The image you upload needs to be a logo design, for example your Barn logo or crest. We cannot embroider photographs. </li>
				<li>If you do not have a specific embroidery file, please upload your logo in one of the following formats (jpg, jpeg, png, gif). We will digitalise your logo for you and keep it on file for future use with Triple Crown Custom.</li>
				</ul>

				<h3>Trying on your design</h3>

				<ul class='amy_list'>
					<li>Select 'Generate Image - try on' to view your design on your blanker</li>
					<li>Use the button Try On to view your design on your blanket.</li>
					<li>As the Embroidery Design Tool is a once off image generation, to edit an area please re-select and begin this process again</li>
				</ul>


				<input type='button' id='closeUserGuide' value='Hide User Guide' />
			</article>
		</div>
	</div>
</div><!-- //// close hidden area -->";



?>

