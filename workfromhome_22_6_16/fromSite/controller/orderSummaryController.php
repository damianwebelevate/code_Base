<?php header('Content-Type: application/json'); header('Access-Control-Allow-Origin: *'); header('Access-Control-Allow-Methods: GET, POST'); ?>

<?php
// require dirname(__FILE__).'/../includes/commonResources.php';

require dirname(__FILE__).'\\..\\includes\commonResources.php';
require dirname(__FILE__).'\\..\\functions\functions.php';

// session vars:
$price = $requests = $rugColor = $binding = $piping = $rug = $imageTwo = "";

$image = $_POST['afterCanvasToImage'];
// create an image from the above information
if($image != ""){

	$value = generateFormToken("Order_Summary");

	$token = hash('sha256', uniqid(microtime(),true));

	$filename = "withEmbroidery";

	$path = dirname(__FILE__).'\..\withEmbroidery\\';
	$parts    = explode(',', $image);
	$filepath = $path."{$filename}_{$token}.png";

	file_put_contents($filepath, base64_decode($parts[1]));

	$linkToFile = BASE_URI."withEmbroidery/".$filename."_".$token.".png";

	$rugColor = isset($_SESSION['page2']['Body Color']) ? $_SESSION['page2']['Body Color'] : "";
	$binding = isset($_SESSION['page2']['Binding Color']) ? $_SESSION['page2']['Binding Color'] : "";
	$piping = isset($_SESSION['page2']['Piping Color']) ? $_SESSION['page2']['Piping Color'] : "";
	$rug = isset($_SESSION['page2']['Rug Selection']) ? $_SESSION['page2']['Rug Selection'] : "";


	$rugTitle = isset($_SESSION['index']['Rug Selection']) ? $_SESSION['page2']['Rug Selection'] : " ";

	$baseBody = isset($_SESSION['page2']['rugID'])  ? $_SESSION['page2']['rugID']  : "navy";

	$baseBind = isset($_SESSION['page2']['bindID']) ? $_SESSION['page2']['bindID'] : "bind_white";

	$basePipe = isset($_SESSION['page2']['pipeID']) ? $_SESSION['page2']['pipeID'] : "pipe_silvergrey";

	$price = isset($_SESSION['price']) ? $_SESSION['price'] : "";

	$imageTwo = isset($_SESSION['product_image']) ? $_SESSION['product_image'] : "";

	$requests = isset($_SESSION['requests']) ? $_SESSION['requests'] : "";


	if(isset($_SESSION['embroidery_neck_details'])){
		$neckDetails = $_SESSION['embroidery_neck_details'];
	}else{
		$neckDetails = "<div class='bodyColorDetails'><h4>Area not used</h4></div><div class='bodyColorDetailsDetails'></div>";
	}
	if(isset($_SESSION['embroidery_center_details'])){
		$centerDetails = $_SESSION['embroidery_center_details'];
	}else{
		$centerDetails = "<div class='bodyColorDetails'><h4>Area not used</h4></div><div class='bodyColorDetailsDetails'></div>";
	}
	if(isset($_SESSION['embroidery_hip_details'])){
		$hipDetails = $_SESSION['embroidery_hip_details'];
	}else{
		$hipDetails = "<div class='bodyColorDetails'><h4>Area not used</h4></div><div class='bodyColorDetailsDetails'></div>";
	}
	if(isset($_SESSION['embroidery_shoulder_details'])){
		$shoulderDetails = $_SESSION['embroidery_shoulder_details'];
	}else{
		$shoulderDetails = "<div class='bodyColorDetails'><h4>Area not used</h4></div><div class='bodyColorDetailsDetails'></div>";
	}



	if(isset($_SESSION['new_embroidery_neck'])){
		$newNeckDetails = $_SESSION['new_embroidery_neck'];
	}else{
		$newNeckDetails = ' <tr>
								<!-- empty region -->
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">Area not used</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										
									</td>
								</tr>';
	}

	if(isset($_SESSION['new_embroidery_center'])){
		$newCenterDetails = $_SESSION['new_embroidery_center'];
	}else{
		$newCenterDetails = ' <tr>
								<!-- empty region -->
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">Area not used</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										
									</td>
								</tr>';
	}

	if(isset($_SESSION['new_embroidery_hip'])){
		$newHipDetails = $_SESSION['new_embroidery_hip'];
	}else{
		$newHipDetails = ' <tr>
								<!-- empty region -->
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">Area not used</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										
									</td>
								</tr>';
	}

	if(isset($_SESSION['new_embroidery_shoulder'])){
		$newShoulderDetails = $_SESSION['new_embroidery_shoulder'];
	}else{
		$newShoulderDetails = ' <tr>
								<!-- empty region -->
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; font-weight: normal; font-family: Arial;">Area not used</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right; font-family: Arial;">
										
									</td>
								</tr>';
	}

	// get the values of the totals stored in the previous page for both text and for logo

	$neckTextCharge = isset($_SESSION['total_neck_text_charge']) ? $_SESSION['total_neck_text_charge'] : 0.00;
	$centerTextCharge = isset($_SESSION['total_center_text_charge']) ? $_SESSION['total_center_text_charge'] : 0.00;
	$hipTextCharge = isset($_SESSION['total_hip_text_charge']) ? $_SESSION['total_hip_text_charge'] : 0.00;
	$shoulderTextCharge = isset($_SESSION['total_shoulder_text_charge']) ? $_SESSION['total_shoulder_text_charge'] : 0.00;

	$totalForText = number_format(($neckTextCharge + $centerTextCharge + $hipTextCharge + $shoulderTextCharge), 2);

	$neckLogoCharge = isset($_SESSION['total_neck_logo_charge']) ? $_SESSION['total_neck_logo_charge'] : 0.00;
	$centerLogoCharge = isset($_SESSION['total_center_logo_charge']) ? $_SESSION['total_center_logo_charge'] : 0.00;
	$hipLogoCharge = isset($_SESSION['total_hip_logo_charge']) ? $_SESSION['total_hip_logo_charge'] : 0.00;
	$shoulderLogoCharge = isset($_SESSION['total_shoulder_logo_charge']) ? $_SESSION['total_shoulder_logo_charge'] : 0.00;

	$totalForLogo = number_format(($neckLogoCharge + $centerLogoCharge + $hipLogoCharge + $shoulderLogoCharge), 2);

	$subtotal = number_format(($totalForText + $totalForLogo + $price), 2);


	// define a html table that will be completed on order completion
	// leave space to include Total + shipping in step 4
	// complete clean up of current code
	// assign all values to one $_session variable ['single_order']
	// get the text counted in captureEmbroideryDetails
	// get the number of logos loaded for each area
	$singleOrderPartOne = '	<div class="wrapper">
							<div style="margin: 50px 0px;">
								<table style="border: 1px solid #B8A14F; border-collapse: collapse; width: 100%; table-layout: fixed;">
									<tbody>
									  <tr>
									  	<td style="padding: 10px; border: 1px solid #B8A14F; overflow: auto;">
									  		<h1 style="background-image: url(http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/crown.png); background-position: left top; background-repeat: no-repeat; background-size: contain; height: 34px; padding-left: 50px !important; color: #B8A14F; text-transform: uppercase; margin-bottom: 34px !important; font-family: \'Playfair Display SC\', \'Open Sans\', \'Times\';"><span></span>'.$rug.'</h1>
									  	</td>
									  </tr>
									</tbody>
								</table>
							</div>
							<div style="margin: 50px 0px;">
								<table style="border: 1px solid #B8A14F; border-collapse: collapse; width: 100%; table-layout: fixed; margin: 0 auto;">
									<tbody>
										<tr>
											<td style="border: 1px solid #B8A14F;">
												<div style="height: 250px;"><img src="'.$imageTwo.'" alt="Text and Logo Embroidered horse" style="width: 300px; height: auto; margin: 0 auto; display: block;"</div>
											</td>
										</tr>
									</tbody>
								</table></div>';

	$buttonToOpenTheOrder = ' <div style="width: 100%; position: relative; overflow: auto; padding: 10px;">
								<div title="Show full Details" id="showDetails">Show Full Details</div>
							</div>';


	$firstLineOfFullOrder = ' <div id="fullOrder">';

	$firstLineToPutIntoSession = ' <div id="fullOrder">';

	$singleOrderPartTwo = '	<div class="bodyColorTitle">
									<h3>BLANKET COLORS</h3>
								</div><!-- row -->
								<div class="bodyColorRow">
									<div class="bodyColorHalf">
										<h4>Body Color</h4>
									</div><!-- cell 50% -->
									<div class="bodyColorHalfCenter">
										'.$rugColor.'
									</div><!-- cell 50% -->
								</div><!-- row -->
								<div class="bodyColorRow">
									<div class="bodyColorHalf">
										<h4>Binding Color</h4>
									</div><!-- cell 50% -->
									<div class="bodyColorHalfCenter">
										'.$binding.'
									</div><!-- cell 50% -->
								</div><!-- row -->
								<div class="bodyColorRow">
									<div class="bodyColorHalf">
										<h4>Piping Color</h4>
									</div><!-- cell 50% -->
									<div class="bodyColorHalfCenter">
										'.$piping.'
									</div><!-- cell 50% -->
								</div><!-- row -->
								<div class="bodyColorTitle">
									<h3>BLANKET TEXT</h3>
								</div><!-- row -->
								<div class="bodyColorBlackTitle">
									<h3>Neck</h3>
								</div><!-- row -->
								'.$neckDetails.'
								<div class="bodyColorBlackTitle">
									<h3>Center</h3>
								</div><!-- row -->
								'.$centerDetails.'
								<div class="bodyColorBlackTitle">
									<h3>Hip</h3>
								</div><!-- row -->
								'.$hipDetails.'
								<div class="bodyColorBlackTitle">
									<h3>Shoulder</h3>
								</div><!-- row -->
								'.$shoulderDetails.'
								<div class="bodyColorBlackTitle">
									<h3 style="text-align: center; color: #B8A14F;">REQUESTS</h3>
								</div><!-- row -->
								<div class="bodyColorRow">
									<div class="bodyColorHalf">
										<p>'.$requests.'</p>
									</div><!-- cell 50% -->
									<div class="bodyColorHalfCenter">

									</div><!-- cell 50% -->
								</div><!-- row -->';







	$closeFullOrderButton = '	<div style="box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 50px 0px 10px 0px;">
									<div title="Hide full Details" id="hideDetails">Hide Full Details</div>
								</div><!-- row -->
								</div>';


	$forDisplayForm = '	<form id="newAddToCart" method="POST" action="http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/site/addToCart.php">';

	$formSectionForBoth = ' <div class="bodyColorRow" >
									<div class="bodyColorHalf">
										<h3>BASE BLANKET PRICE</h3>
									</div><!-- cell 50% -->
									<div class="bodyColorHalfRight">
										<h3>$'.$price.'</h3>			
									</div><!-- cell 50% -->
								</div><!-- row -->
								<div class="bodyColorBorderTop">
									<div class="bodyColorHalf">
										<h3>TOTAL FOR TEXT</h3>
									</div><!-- cell 50% -->
									<div class="bodyColorHalfRight">
										<h3>$'.$totalForText.'</h3>			
									</div><!-- cell 50% -->
								</div><!-- row -->
								<div class="bodyColorBorderTop">
									<div class="bodyColorHalf">
										<h3>TOTAL FOR LOGO</h3>
									</div><!-- cell 50% -->
									<div class="bodyColorHalfRight">
										<h3>$'.$totalForLogo.'</h3>			
									</div><!-- cell 50% -->
								</div><!-- row -->';

	$formSectionForDisplay = '	<div class="bodyColorBorderTop">
									<div class="bodyColorHalfBold">
										<h3>SUBTOTAL<small style="font-weight: normal;"> Ex. Shipping</small></h3>
									</div><!-- cell 50% -->
									<div class="bodyColorHalfRight">
										<h3 id="price">$'.$subtotal.'</h3>
									</div><!-- cell 50% -->
								</div><!-- row -->
								<div class="bodyColorBorderTop">
									<div class="bodyColorHalf">
										<h3>Please choose your size</h3>
									</div><!-- cell 50% -->
									<div class="bodyColorSelect">
										<select style="display: block; margin: 0 auto;" id="second" name="select" size="1">
												<option value="">Please Select: </option>
												<option value="66">66 inches</option>
												<option value="69">69 inches</option>	
												<option value="72">72 inches</option>
												<option value="75">75 inches</option>
												<option value="78">78 inches</option>
												<option value="81">81 inches</option>
												<option value="84">84 inches</option>
												<option value="87">87 inches</option>
											</select>
									</div><!-- cell 50% -->
								</div><!-- row -->
								<div class="bodyColorBorderTop">
									<div class="bodyColorQuantity">
										<h3>Quantity: <span id="quan">1</span></h3>
									</div><!-- cell 50% -->
									<div class="bodyColorHalf">
										<div class="bodyColorPlusMinus">
											<div id="minus">-</div>
											<div id="plus">+</div>
										</div>
									</div><!-- cell 50% -->
								</div><!-- row -->

								<div id="display"></div>

								<div style="position: relative; overflow: auto; padding: 10px;">


										<input id="total" name="total" type="hidden" value="0">

										<input type="hidden" id="quantityNew" min="0" name="quantity" value="1">

										<input type="hidden" name="orderSummaryToken" value="'.$value.'">

										<input type="hidden" id="unit" name="basePrice" value="'.$subtotal.'">

										<input type="hidden" value="'.$subtotal.'" id="sub" name="total">

								</div><!-- row -->

								<div class="bodyColorBorderTop">
									<div class="bodyColorHalf">
										
										<input class="orderButtonRight" id="addToCart" type="submit" name="cart" value="Add To Cart">

									</div><!-- cell 50% -->
									<div class="bodyColorHalf">
									

										<input class="orderButton" id="buyNow" type="submit" name="buy" value="Check Out">


									</div><!-- cell 50% -->
								</div><!-- row -->
								
							</div><!-- close order summary -->
						</form>';



	$forReceipt = '	<div class="wrapper">
						<div style="margin: 50px 0px;">
							<table style="border: 1px solid #B8A14F; border-collapse: collapse; width: 100%; table-layout: fixed;">
								<tbody>
								  <tr>
								  	<td style="padding: 10px; border: 1px solid #B8A14F; overflow: auto;">
								  		<h1 style="background-image: url(http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/crown.png); background-position: left top; background-repeat: no-repeat; background-size: contain; height: 34px; padding-left: 50px !important; color: #B8A14F; text-transform: uppercase; margin-bottom: 34px !important; font-family: \'Playfair Display SC\', \'Open Sans\', \'Times\';">'.$rug.'</h1>
								  	</td>
								  </tr>
								</tbody>
							</table>
						</div>
						<div style="margin: 50px 0px;">
							<table style="border: 1px solid #B8A14F; border-collapse: collapse; width: 100%; table-layout: fixed; margin: 0 auto;">
								<tbody>
									<tr>
										<td style="border: 1px solid #B8A14F;">
											<div style="height: 250px;">'.$imageTwo.'</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div id="fullOrderToShow">
						<div class="bodyColorTitle">
							<h3>BLANKET COLORS</h3>
						</div><!-- row -->
						<div class="bodyColorRow">
							<div class="bodyColorHalf">
								<h4>Body Color</h4>
							</div><!-- cell 50% -->
							<div class="bodyColorHalfCenter">
								'.$rugColor.'
							</div><!-- cell 50% -->
						</div><!-- row -->
						<div class="bodyColorRow">
							<div class="bodyColorHalf">
								<h4>Binding Color</h4>
							</div><!-- cell 50% -->
							<div class="bodyColorHalfCenter">
								'.$binding.'
							</div><!-- cell 50% -->
						</div><!-- row -->
						<div class="bodyColorRow">
							<div class="bodyColorHalf">
								<h4>Piping Color</h4>
							</div><!-- cell 50% -->
							<div class="bodyColorHalfCenter">
								'.$piping.'
							</div><!-- cell 50% -->
						</div><!-- row -->
						<div class="bodyColorTitle">
							<h3>BLANKET TEXT</h3>
						</div><!-- row -->
						<div class="bodyColorBlackTitle">
							<h3>Neck</h3>
						</div><!-- row -->
						'.$neckDetails.'
						<div class="bodyColorBlackTitle">
							<h3>Center</h3>
						</div><!-- row -->
						'.$centerDetails.'
						<div class="bodyColorBlackTitle">
							<h3>Hip</h3>
						</div><!-- row -->
						'.$hipDetails.'
						<div class="bodyColorBlackTitle">
							<h3>Shoulder</h3>
						</div><!-- row -->
						'.$shoulderDetails.'
						<div class="bodyColorBlackTitle">
							<h3 style="text-align: center; color: #B8A14F;">REQUESTS</h3>
						</div><!-- row -->
						<div class="bodyColorRow">
							<div class="bodyColorHalf">
								<p>'.$requests.'</p>
							</div><!-- cell 50% -->
							<div class="bodyColorHalfCenter">

							</div><!-- cell 50% -->
						</div><!-- row -->
						<div class="bodyColorRow" >
							<div class="bodyColorHalf">
								<h3>BASE BLANKET PRICE</h3>
							</div><!-- cell 50% -->
							<div class="bodyColorHalfRight">
								<h3>$'.$price.'</h3>			
							</div><!-- cell 50% -->
						</div><!-- row -->
						<div class="bodyColorBorderTop">
							<div class="bodyColorHalf">
								<h3>TOTAL FOR TEXT</h3>
							</div><!-- cell 50% -->
							<div class="bodyColorHalfRight">
								<h3>$'.$totalForText.'</h3>			
							</div><!-- cell 50% -->
						</div><!-- row -->
						<div class="bodyColorBorderTop">
							<div class="bodyColorHalf">
								<h3>TOTAL FOR LOGO</h3>
							</div><!-- cell 50% -->
							<div class="bodyColorHalfRight">
								<h3>$'.$totalForLogo.'</h3>			
							</div><!-- cell 50% -->
						</div><!-- row -->';




	$toDisplay = $singleOrderPartOne;
	$toDisplay .= $buttonToOpenTheOrder;
	$toDisplay .= $firstLineOfFullOrder;
	$toDisplay .= $singleOrderPartTwo;
	$toDisplay .= $closeFullOrderButton;
	$toDisplay .= $forDisplayForm;
	$toDisplay .= $formSectionForBoth;
	$toDisplay .= $formSectionForDisplay;



	$_SESSION['new_single_order'] = $forReceipt;

	$partOneOfCart = '<div class="cartContainer">
		<div class="cartImageHolder">
		<!-- image -->
		'.$imageTwo.'
		</div>
		<div class="cartHeadingHolder">
		<div style="box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; position: relative; overflow: auto; padding: 10px;">
		  <h1 style="background-image: url(http://dev.triplecrowncustom.com/dev/wp-content/themes/triple/img/crown.png); background-position: left top; background-repeat: no-repeat; background-size: contain; height: 34px; padding-left: 50px !important; color: #B8A14F; text-transform: uppercase; margin-bottom: 34px !important; font-family: \'Playfair Display SC\', \'Open Sans\', \'Times\';">'.$rug.'</h1>
		</div>
		<div style="box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
		  <div style="width: 50%; box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; position: relative; display: inline; float: left; padding-left: 5%;">
		    <h3>BASE BLANKET PRICE</h3>
		  </div><!-- cell 50% -->
		  <div style="width: 50%; box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; padding-left: 5%; text-align: center; position: relative; display: inline; float: left; padding-left: 5%;">
		    <h3>$ '.$price.'</h3>
		  </div><!-- cell 50% -->
		</div>
		<div style="box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
		  <div style="width: 50%; box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; position: relative; display: inline; float: left; padding-left: 5%;">
		    <h3>TOTAL FOR TEXT</h3>
		  </div><!-- cell 50% -->
		  <div style="width: 50%; box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; padding-left: 5%; text-align: center; position: relative; display: inline; float: left; padding-left: 5%;">
		    <h3>$ '.$totalForText.'</h3>
		  </div><!-- cell 50% -->
		</div>
		<div style="box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
		  <div style="width: 50%; box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; position: relative; display: inline; float: left; padding-left: 5%;">
		    <h3>TOTAL FOR LOGO</h3>
		  </div><!-- cell 50% -->
		  <div style="width: 50%; box-sizing: border-box; -o-box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; padding-left: 5%; text-align: center; position: relative; display: inline; float: left; padding-left: 5%;">
		    <h3>$ '.$totalForLogo.'</h3>
		  </div><!-- cell 50% -->
		</div>';

	$_SESSION['part_one_of_cart'] = $partOneOfCart;




	// At this point the application has sotored/not stored the table rows for the text/logo uploads
	// wrap these details inside the table that you are creating and close it
	// this message forms the basis of the body of the email.
	// the rest is put in the end header/footer/title etc
	// the title arguement is at the end of the call before email sent

	$message = '		<!-- title of the blanket -->		
						<table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #B8A14F; width: 500px; margin: 0 auto;">
				            <tr>	
	               				<td width="10%" style="padding: 10px 2px;">
	               					<img width="37" style="border: none;" src="https://triplecrowncustom.com/wp-content/themes/triple/img/crown.png" />
	               				</td>
	               				<td width="90%" style="padding: 10px 0px;">
	               					<h1 style="margin: 0; font-size: 29px; font-family: Times; color: #B8A14F; text-transform: uppercase; font-weight: normal;">'.$rug.'</h1>
	               				</td>
				            </tr>
				        </table>
				        <!-- the image of the blanket -->
						<table border="0" cellpadding="0" cellspacing="0" style="width: 500px; margin: 0 auto;">
							<tr><td style="padding: 10px;"><!-- gap in flow of doc --> </td><td></td></tr>
						</table>
						<table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #B8A14F; width: 500px; margin: 0 auto;">
							<tr>
							<!-- the Image of the blanket --> 
								<td  align="center" style="padding: 0px 0px 20px 0px;">	
									'.$imageTwo.'
								</td>
							</tr>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" style="width: 500px; margin: 0 auto;"><tr><td style="padding: 10px;"><!-- gap in flow of doc --> </td><td></td></tr></table>
				        <table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #B8A14F; border-bottom: none; width: 500px; margin: 0 auto;">
				        	<tr>
								<td colspan="2" style="border-bottom: 1px solid #B8A14F; text-align: center;">
									<h3 style="color: #B8A14F; font-size: 24px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">
										Blanket Colors
									</h3>
								</td>
								</tr>
								<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">Body Color</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">'.$rugColor.'</h4>
									</td>
								</tr>
								<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">Piping Color</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">'.$piping.'</h4>
									</td>
								</tr>
				                <tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">Binding Color</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">'.$binding.'</h4>
									</td>
								</tr>
								<tr>
									<td colspan="2" style="border-bottom: 1px solid #B8A14F; text-align: center;">
										<h3 style="color: #B8A14F; font-size: 24px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">
											Blanket Text
										</h3>
									</td>
								</tr>
								<tr>
									<td colspan="2" style="border-bottom: 1px solid #B8A14F; text-align: center;">
										<h3 style="color: #000000; font-size: 24px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">
											Neck
										</h3>
									</td>
								</tr>'.$newNeckDetails.
								'<tr>
									<td colspan="2" style="border-bottom: 1px solid #B8A14F; text-align: center;">
										<h3 style="color: #000000; font-size: 24px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">
											Center
										</h3>
									</td>
								</tr>'.$newCenterDetails.
								'<tr>
									<td colspan="2" style="border-bottom: 1px solid #B8A14F; text-align: center;">
										<h3 style="color: #000000; font-size: 24px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">
											Hip
										</h3>
									</td>
								</tr>'.$newHipDetails.
								'<tr>
									<td colspan="2" style="border-bottom: 1px solid #B8A14F; text-align: center;">
										<h3 style="color: #000000; font-size: 24px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">
											Shoulder
										</h3>
									</td>
								</tr>'.$newShoulderDetails.
								'<tr>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px;">
										<h4 style="font-size: 18px; margin: 20px 0px 10px 0px; text-transform: uppercase; font-weight: normal; font-family: Arial;">Customer Requests</h4>
									</td>
									<td style="border-bottom: 1px solid #B8A14F; padding: 5px; text-align: right;">
										<p style="font-weight: normal; font-family: Arial;">'.$requests.'</p>
									</td>
								</tr>'
								; //close table at the end


	$_SESSION['checkEmail'] = $message;

	echo json_encode(array("POSTED" => "true", "PRODUCT_IMAGE" => $filepath, "RETURN_DATA" => $toDisplay, "DATA_POSTED" => $_POST));

}else{
	echo json_encode(array("POSTED" => "false"));
}

?>