<?php
/* 	==========================================================================
		Head information for the application
	==========================================================================
*/
require dirname(__FILE__).'/../controller/sessionStart.php';

// define("BASE_URI", "http://dev.triplecrowncustom.com/app/");

$head = ' 	<meta name="viewport" content="width=device-width, user-scalable=yes">
			<meta charset="UTF-8">
			<link rel="stylesheet" id="structure-css"  href="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/inc/css/jquery-ui.structure.min.css" type="text/css" media="all" />
			<link rel="stylesheet" href="'.BASE_URI.'css/bootstrap.css" type="text/css" media="all" />
			<link rel="stylesheet" href="'.BASE_URI.'css/twentyFourteen.css" type="text/css" media="all" />
			<link rel="stylesheet" href="'.BASE_URI.'css/style.css" type="text/css" media="all" />
			<link rel="stylesheet" href="'.BASE_URI.'css/genericons.css" type="text/css" media="all" />
			<link rel="stylesheet" id="playfair-css"  href="http://fonts.googleapis.com/css?family=Playfair+Display+SC%3A400%2C700&#038;" type="text/css" media="all" />
			<link rel="stylesheet" id="opensans-css"  href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C800%2C600&#038;" type="text/css" media="all" />
			<link rel="stylesheet" id="run_custom_rug_css-css"  href="'.BASE_URI.'css/main.css" type="text/css" media="all" />
			<link rel="stylesheet" id="responsive_css-css"  href="'.BASE_URI.'css/responsive.css" type="text/css" media="all" />
			<link rel="stylesheet" href="'.BASE_URI.'css/iframeStyles.css" type="text/css" media="all" />
			<script type="text/javascript" src="'.BASE_URI.'js/jquery_latest.js"></script>
			<script type="text/javascript" src="'.BASE_URI.'js/some.js"></script>
			<script type="text/javascript" src="'.BASE_URI.'js/app.js"></script>
			';


$menu = '<nav id="primary-navigation" class="site-navigation primary-navigation navigation" role="navigation">
					
					<button id="menuButton" class="menu-toggle">Primary Menu</button>
					
					<a class="screen-reader-text skip-link" href="#content">Skip to content</a>
					<div class="menu-main-container"><ul id="primary-menu" class="nav-menu"><li id="menu-item-915" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-915"><a href="http://dev.triplecrowncustom.com/dev/">Home</a></li>
<li id="menu-item-916" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-916"><a href="http://dev.triplecrowncustom.com/dev/about-us/">About Us</a></li>
<li id="menu-item-1557" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1557"><a>Products</a>
<ul class="sub-menu">
	<li id="menu-item-1558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1558"><a href="http://dev.triplecrowncustom.com/dev/products-list/">Products List</a></li>
	<li id="menu-item-1564" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1564"><a href="http://dev.triplecrowncustom.com/dev/pimlico-wool-dress-sheet/">Pimlico</a></li>
	<li id="menu-item-1563" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1563"><a href="http://dev.triplecrowncustom.com/dev/hollywood-cotton-cooler/">Hollywood</a></li>
	<li id="menu-item-1562" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1562"><a href="http://dev.triplecrowncustom.com/dev/gulfstream-scrim-net-cooler/">Gulfstream</a></li>
	<li id="menu-item-1561" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1561"><a href="http://dev.triplecrowncustom.com/dev/extended-neck-lined-rain-sheet/">Extended Neck</a></li>
	<li id="menu-item-1565" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1565"><a href="http://dev.triplecrowncustom.com/dev/santa-anita-stable-sheet-tcc/">Santa Anita</a></li>
	<li id="menu-item-1560" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1560"><a href="http://dev.triplecrowncustom.com/dev/200g-belmont-stable-blanket/">200G Belmont</a></li>
</ul>
</li>
<li id="menu-item-1566" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1566"><a>Guides</a>
<ul class="sub-menu">
	<li id="menu-item-1567" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1567"><a href="http://dev.triplecrowncustom.com/dev/size-guide/">Size Guide</a></li>
	<li id="menu-item-1568" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1568"><a href="http://dev.triplecrowncustom.com/dev/color-guide/">Color Guide</a></li>
</ul>
</li>
<li id="menu-item-917" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-917"><a href="http://dev.triplecrowncustom.com/dev/award-blankets/">Award Blankets</a></li>
<li id="menu-item-919" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-919"><a href="http://dev.triplecrowncustom.com/dev/our-riders/">Our Riders</a></li>
<li id="menu-item-920" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-920"><a href="http://dev.triplecrowncustom.com/dev/sponsorship/">Sponsorship</a></li>
<li id="menu-item-918" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-918"><a href="http://dev.triplecrowncustom.com/dev/contact-us/">Contact Us</a></li>
</ul></div>				</nav><!--close nav-->';


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



/* 	==========================================================================
		User guide for Step One
	==========================================================================
*/

$stepOneUserGuide = '<div class="container-fluid">
			<div class="row">

				<div style="display: none;" id="stepOneUserGuide">
					<div class="wrapper wrapperMobile">
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
								<li>When you are happy with your color choices, please use the "Next Step" button which will bring you to Step 2 Add Embroidery</li>
							</ul>
							<input type="button" id="closeStepOneUserGuide" value="Hide User Guide" />
						</article>
					</div><!-- close Wrapper Mobile -->
				</div>
			</div>
		</div>';


?>