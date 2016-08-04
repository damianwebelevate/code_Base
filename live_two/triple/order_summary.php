<?php header('X-Robots-Tag: noindex,nofollow'); ?>
<?php
session_start();

if(isset($_SESSION['Page Three_token'])){
	unset($_SESSION['Page Three_token']);
}
?>
<?php

require (dirname(__FILE__).'/resources.php');

$value = generateFormToken("Order Summary");


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
?>

<?php

/*
*
* Template Name: Order Summary
*
*/

// logo total add up

get_header();?>

<?php



$message = $_SESSION['message'];
$rug = $_SESSION['page2']['Rug Selection'];
$rugColor = $_SESSION['page2']['Body Color'];
$binding = $_SESSION['page2']['Binding Color'];
$piping = $_SESSION['page2']['Piping Color'];
$neckCost = $_SESSION['neck']['Font Price: '];
$centerCost = $_SESSION['center']['Font Price: '];
$shoulderCost = $_SESSION['shoulder']['Font Price: '];
$hipCost = $_SESSION['hip']['Font Price: '];
$price = $_SESSION['charge'];
$finalImage = $_SESSION['finalImage'];
$imageToRender = '<img src="'.$finalImage.'" style="width: 500px; height: auto; display: block; margin: 0 auto;">';

$textTotal = $neckCost + $centerCost + $shoulderCost + $hipCost;
$logoTotal = 0.00;
$customisationTotal = $textTotal + $price + $logoTotal;

$logoOne = "Files that were uploaded";
$logoTwo = "Files that were uploaded";

$theNeckText = $theNeckPrice = $theCenterText = $theCenterPrice = $theShoulderText = $theFrontPrice = $theHipText = $theBackPrice;

$theNeckText = $_SESSION['neck']['Text Entered: '];
$theCenterText = $_SESSION['center']['Text Entered: '];
$theHipText = $_SESSION['hip']['Text Entered: '];
$theShoulderText = $_SESSION['shoulder']['Text Entered: '];

$theNeckPrice = $_SESSION['neck']['Font Price: '];
$theCenterPrice = $_SESSION['center']['Font Price: '];
$theBackPrice = $_SESSION['hip']['Font Price: '];
$theFrontPrice = $_SESSION['shoulder']['Font Price: '];

$theNeckFontFamily = $_SESSION['neck']['Font Family Selected: '];
$theNeckFontColor = $_SESSION['neck']['Color Selected: '];

$theCenterFontFamily = $_SESSION['center']['Font Family Selected: '];
$theCenterFontColor = $_SESSION['center']['Color Selected: '];

$theShoulderFontFamily = $_SESSION['shoulder']['Font Family Selected: '];
$theShoulderFontColor = $_SESSION['shoulder']['Color Selected: '];

$theHipFontFamily = $_SESSION['hip']['Font Family Selected: '];
$theHipFontColor = $_SESSION['hip']['Color Selected: '];

$table = "<table style='display: none;'><tbody>";

$table .= 	'<tr><td style="border: none;"><input type="hidden" value="'.$rug.'" name="cartBlanketName" /></td><td style="border: none;"><input type="hidden" value="'.$rugColor.'" name="cartBlanketColor" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$binding.'" name="cartBlanketBinding" /></td><td style="border: none;"><input type="hidden" value="'.$piping.'" name="cartBlanketPiping" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$neckCost.'" name="cartFontNeckCharge" /></td><td style="border: none;"><input type="hidden" value="'.$centerCost.'" name="cartFontCenterCharge" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$shoulderCost.'" name="cartFontShoulderCharge" /></td><td style="border: none;"><input type="hidden" value="'.$hipCost.'" name="cartFontHipCharge" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$theNeckText.'" name="cartNeckTextEntered" /></td><td style="border: none;"><input type="hidden" value="'.$theCenterText.'" name="cartCenterTextEntered" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$theShoulderText.'" name="cartShoulderTextEntered" /></td><td style="border: none;"><input type="hidden" value="'.$theHipText.'" name="cartHipTextEntered" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$textTotal.'" name="cartTextTotal" /></td><td style="border: none;"><input type="hidden" value="'.$customisationTotal.'" name="cartCustomisationTotal" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$price.'" name="cartBlanketPrice" /></td><td style="border: none;"><input type="hidden" value="'.$logoOne.'" name="cartLogoOneUploaded" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$logoTwo.'" name="cartLogoTwoUploaded" /></td><td style="border: none;"><input type="hidden" value="'.$logoTotal.'" name="cartLogoCharges" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$logoTwo.'" name="cartLogoTwoUploaded" /></td><td style="border: none;"><input type="hidden" value="'.$logoTotal.'" name="cartLogoCharges" /></td></tr>
			 <tr><td style="border: none;"><input type="hidden" value="'.$value.'" name="token" /></td><td style="border: none;"></td></tr>
			 ';

$table .= "</tbody></table>";


$orderSummaryTable = '	<div style="width: 100%; position: relative; overflow: auto; padding: 10px;">
	<div title="Show full Details" id="showDetails" >Show Full Details</div>
</div><!-- row -->
<div id="fullOrder" style="display: none; margin: 50px auto; border-left: 1px solid #B8A14F; border-right: 1px solid #B8A14F; border-bottom: 1px solid #B8A14F;">
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center; color: #B8A14F;">BLANKET COLORS</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Body Color</h4>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		'.$rugColor.'
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Binding Color</h4>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		'.$binding.'
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Piping Color</h4>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		'.$piping.'
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center; color: #B8A14F;">BLANKET TEXT</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center;">Neck</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Text Entered: </h4>
		<p>'.$theNeckText.'</p>
		<h4>Color Selected: </h4>
		<p>'.$theNeckFontColor.'</p>
		<h4>Font Family Selected: </h4>
		<p>'.$theNeckFontFamily.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		<h4>Neck Font Charge: </h4>
		<p>'.$neckCost.'</p>
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center;">Center</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Text Entered: </h4>
		<p>'.$theCenterText.'</p>
		<h4>Color Selected: </h4>
		<p>'.$theCenterFontColor.'</p>
		<h4>Font Family Selected: </h4>
		<p>'.$theCenterFontFamily.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		<h4>Center Font Charge: </h4>
		<p>'.$centerCost.'</p>
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center;">Hip</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Text Entered: </h4>
		<p>'.$theHipText.'</p>
		<h4>Color Selected: </h4>
		<p>'.$theHipFontColor.'</p>
		<h4>Font Family Selected: </h4>
		<p>'.$theHipFontFamily.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		<h4>Hip Font Charge: </h4>
		<p>'.$hipCost.'</p>
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center;">Shoulder</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Text Entered: </h4>
		<p>'.$theShoulderText.'</p>
		<h4>Color Selected: </h4>
		<p>'.$theShoulderFontColor.'</p>
		<h4>Font Family Selected: </h4>
		<p>'.$theShoulderFontFamily.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		<h4>Shoulder Font Charge: </h4>
		<p>'.$shoulderCost.'</p>
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center; color: #B8A14F;">REQUESTS</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<p>'.$message.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">

	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 50px 0px 10px 0px;">
	<div title="Hide full Details" id="hideDetails">Hide Full Details</div>
</div><!-- row -->
</div><!-- hidden only on order summary -->';





$_SESSION['backUpTable'] = '<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center; color: #B8A14F;">BLANKET COLORS</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Body Color</h4>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		'.$rugColor.'
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Binding Color</h4>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		'.$binding.'
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Piping Color</h4>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		'.$piping.'
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center; color: #B8A14F;">BLANKET TEXT</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center;">Neck</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Text Entered: </h4>
		<p>'.$theNeckText.'</p>
		<h4>Color Selected: </h4>
		<p>'.$theNeckFontColor.'</p>
		<h4>Font Family Selected: </h4>
		<p>'.$theNeckFontFamily.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		<h4>Neck Font Charge: </h4>
		<p>'.$neckCost.'</p>
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center;">Center</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Text Entered: </h4>
		<p>'.$theCenterText.'</p>
		<h4>Color Selected: </h4>
		<p>'.$theCenterFontColor.'</p>
		<h4>Font Family Selected: </h4>
		<p>'.$theCenterFontFamily.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		<h4>Center Font Charge: </h4>
		<p>'.$centerCost.'</p>
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center;">Hip</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Text Entered: </h4>
		<p>'.$theHipText.'</p>
		<h4>Color Selected: </h4>
		<p>'.$theHipFontColor.'</p>
		<h4>Font Family Selected: </h4>
		<p>'.$theHipFontFamily.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		<h4>Hip Font Charge: </h4>
		<p>'.$hipCost.'</p>
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center;">Shoulder</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<h4>Text Entered: </h4>
		<p>'.$theShoulderText.'</p>
		<h4>Color Selected: </h4>
		<p>'.$theShoulderFontColor.'</p>
		<h4>Font Family Selected: </h4>
		<p>'.$theShoulderFontFamily.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">
		<h4>Shoulder Font Charge: </h4>
		<p>'.$shoulderCost.'</p>
	</div><!-- cell 50% -->
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<h3 style="text-align: center; color: #B8A14F;">REQUESTS</h3>
</div><!-- row -->
<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
		<p>'.$message.'</p>
	</div><!-- cell 50% -->
	<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; text-align: center;">

	</div><!-- cell 50% -->
</div><!-- row -->';




$cartTable =  ' <table style="border: 1px solid #B8A14F; width: 100%; border-collapse: collapse;">
                        <tbody>
                          <tr>
                          	<td style="padding: 10px; border: 1px solid #B8A14F;">
                          		<h1 style="text-align: center; color: #B8A14F; font-weight: normal; font-family: Arial;">'.$rug.'</h1>
                          	</td>
                          </tr>
                        </tbody>
                      </table><br />';

$cartTable .=  ' <table style="border: 1px solid #B8A14F; width: 100%; border-collapse: collapse;">
                  <tbody>
                    <tr>
                    	<td style="border: 1px solid #B8A14F;">
                    		<img style="width: 600px; height: auto; display: block; margin: 0 auto;max-width: 100%;" src="'.$finalImage.'" alt="Your Custom Design" />
                    	</td>
                    </tr>
                  </tbody>
                </table><br />';

/* 	==========================================================================
		Breadcrumb
	==========================================================================
*/


$breadCrumb = '<ul style="margin-top: 50px;" class="breadTwo">
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
								<div class="number">&#10004;</div>
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
								<div class="number">3</div>
							</div>
							<div class="third">
								<!-- empty -->
							</div>
						<div style="clear: both;"></div>
						<div class="textBox">
							Order Summary
						</div>
					</div>
				</li>
				<li>
					<div style="float: right;" class="block">
						<div class="gapOne"></div>
							
							<div style="float: right;" class="third">
								<div style="float: right;" class="number grey">4</div>
							</div>
								
						<div style="clear: both;"></div>		
						<div style="float: right; position: relative; left: 30px;" class="textBox greyText">
							Checkout
						</div>
					</div>
				</li>
			</ul>';



?>
<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->

		
			<div style="margin-top: 48px;" class="container-fluid">
				<div id="main-content" class="main-content">
					<div id="content" class="site-content" role="main">

						<?php echo $breadCrumb; ?>

						<h1 class="title">Order Summary</h1>




					</div> <!-- #site-content -->
				</div><!-- #main-content -->
			</div><!-- container-fluid -->
			<!-- 
			</div>should be wrapper -->
			<!-- 
			</div>should be container -->
			<!-- 
			</div>should be site main -->




<?php echo $cartTable; ?>
<?php echo $orderSummaryTable; ?>



<form id="newAddToCart" method="POST" action="https://triplecrowncustom.com/wp-content/themes/triple/site/addToCart.php">
	<?php echo $table; ?>
	<div style="width: 100%; box-sizing: border-box; overflow: auto; padding: 0;">
		<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
				<h3>BASE BLANKET PRICE</h3>
			</div><!-- cell 50% -->
			<div style="width: 50%; padding-left: 50px; text-align: center; position: relative; display: inline; float: left; padding-left: 50px;">
				<?php echo "<h3>$".$price."</h3>"; ?>
			</div><!-- cell 50% -->
		</div><!-- row -->
		<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
				<h3>TOTAL FOR TEXT</h3>
			</div><!-- cell 50% -->
			<div style="width: 50%; position: relative; display: inline; float: left;  text-align: center; padding-left: 50px;">
				<?php echo "<h3>$".$textTotal ."</h3>"; ?>
			</div><!-- cell 50% -->
		</div><!-- row -->
		<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
				<h3>TOTAL FOR LOGO</h3>
			</div><!-- cell 50% -->
			<div style="width: 50%; position: relative; display: inline; float: left;  text-align: center; padding-left: 50px;">
				<?php echo "<h3>$".$logoTotal ."</h3>"; ?>
			</div><!-- cell 50% -->
		</div><!-- row -->
		<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; font-weight: bold;">
				<h3>SUBTOTAL<small style="font-weight: normal;"> Ex. Shipping</small></h3>
			</div><!-- cell 50% -->
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;  text-align: center; font-weight: bold;">
				<h3 id="price">$<?php echo $customisationTotal; ?></h3>
			</div><!-- cell 50% -->
		</div><!-- row -->
		<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
			<div style="padding-top: 15px; width: 50%; position: relative; display: inline; float: left; padding-left: 50px; font-weight: bold;">
				<h3>Quantity: <span id="quan">1</span></h3>
			</div><!-- cell 50% -->
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
				<div style="margin: 0 auto; width: 103px; padding: 0; box-sizing: border-box;">
					<div id="minus">-</div>
					<div id="plus">+</div>
				</div>
			</div><!-- cell 50% -->
		</div><!-- row -->
		<div style="width: 100%; border-top: 1px solid #B8A14F; position: relative; overflow: auto; padding: 10px;">
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
				<h3>Please choose your size</h3>
			</div><!-- cell 50% -->
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px; padding-top: 20px; font-weight: bold;">
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

		<div id="display"></div>

		<div style="width: 100%; position: relative; overflow: auto; padding: 10px;">


				<input id="total" name="total" type="hidden" value="<?php echo $customisationTotal; ?>" />

				<input type="hidden" id="quantityNew" min="0" name="quantity" value="1" />

				<input type="hidden" name="orderSummaryToken" value="<?php echo $value; ?>" />

				<input type="hidden" id="unit" name="basePrice" value="<?php echo $customisationTotal; ?>" />

				<input type="hidden" value="<?php echo $customisationTotal; ?>" id="sub" name="total" />

		</div><!-- row -->

		<div style="width: 100%; position: relative; overflow: auto; padding: 10px;">
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
				
				<input style="float: right; margin-right: 50px;" class="orderButton" id="addToCart" type="submit" name="cart" value="Add To Cart" />

			</div><!-- cell 50% -->
			<div style="width: 50%; position: relative; display: inline; float: left; padding-left: 50px;">
			

				<input class="orderButton" id="buyNow" type="submit" name="buy" value="Check Out" />


			</div><!-- cell 50% -->
		</div><!-- row -->
		
	</div><!-- close order summary -->
</form>

	
<script>

	// var sizes = Array();
	// var isDom = Array();
	$j('#showDetails').on("click", function(){
		$j('#fullOrder').toggle();
	});

	$j('#hideDetails').on("click", function(){
		$j('#fullOrder').hide();
	});


	$j('#plus').on("click", function(){
		
		var currentValue = Number($j('#quantityNew').val());
		
		callFunction(currentValue);
		
	});

	$j('#minus').on("click", function(){

		var currentValue = Number($j('#quantityNew').val());
		var x = document.getElementById('display');
		var val;

		if(currentValue === 1){
			val = 1;
			x.className = "";
		}else{
			val = currentValue - 1;
		}

		takeAway(val);

		$j('#quantityNew').val(val);
		$j('#quan').html($j('#quantityNew').val());
		$j('#newQuantityHidden').val($j('#quantityNew').val());

		var w = $j('#unit').val();

		var s = $j('#sub').val();

		var sum = s - w;

		if(sum < w){
			sum = w;
		}else{
			$j('#price').html("$"+sum);
			$j('#sub').val(sum);
			$j('#newTotalHidden').val(sum);
		}
		
	});

	function callFunction(value){
		var y = value;

		var x = document.getElementById('display');

		// x.className = "content";
		var div = document.createElement("DIV");
		div.setAttribute("id", value);
		div.setAttribute("class", "rowOne");

		var innerDivOne = document.createElement("DIV");
		innerDivOne.setAttribute("class", "fifty");

		var innerDivTwo = document.createElement("DIV");
		innerDivTwo.setAttribute("class", "fifty");

		var heading = document.createElement("H3");
		var textHeading = document.createTextNode("Please choose your size ");
		heading.appendChild(textHeading);
		innerDivOne.appendChild(heading);

		var select = document.createElement("SELECT");
		select.setAttribute("name", value);

		var optionLabel = document.createElement("OPTION");
		var optionLabelText = document.createTextNode("Please Select: ");
		optionLabel.appendChild(optionLabelText);

		select.appendChild(optionLabel);

		var optionOne = document.createElement("OPTION");
		var optionOneText = document.createTextNode("66 inches");
		optionOne.setAttribute("name", "66");
		optionOne.appendChild(optionOneText);

		select.appendChild(optionOne);

		var optionTwo = document.createElement("OPTION");
		var optionTwoText = document.createTextNode("69 inches");
		optionTwo.setAttribute("name", "69");
		optionTwo.appendChild(optionTwoText);

		select.appendChild(optionTwo);

		var optionThree = document.createElement("OPTION");
		var optionThreeText = document.createTextNode("72 inches");
		optionThree.setAttribute("name", "72");
		optionThree.appendChild(optionThreeText);

		select.appendChild(optionThree);

		var optionFour = document.createElement("OPTION");
		var optionFourText = document.createTextNode("75 inches");
		optionFour.setAttribute("name", "75");
		optionFour.appendChild(optionFourText);

		select.appendChild(optionFour);

		var optionFive = document.createElement("OPTION");
		var optionFiveText = document.createTextNode("78 inches");
		optionFive.setAttribute("name", "78");
		optionFive.appendChild(optionFiveText);

		select.appendChild(optionFive);

		var optionSix = document.createElement("OPTION");
		var optionSixText = document.createTextNode("81 inches");
		optionSix.setAttribute("name", "81");
		optionSix.appendChild(optionSixText);

		select.appendChild(optionSix);

		var optionSeven = document.createElement("OPTION");
		var optionSevenText = document.createTextNode("84 inches");
		optionSeven.setAttribute("name", "84");
		optionSeven.appendChild(optionSevenText);

		select.appendChild(optionSeven);

		var optionEight = document.createElement("OPTION");
		var optionEightText = document.createTextNode("87 inches");
		optionEight.setAttribute("name", "87");
		optionEight.appendChild(optionEightText);

		select.appendChild(optionEight);

		innerDivTwo.appendChild(select);

		div.appendChild(innerDivOne);
		div.appendChild(innerDivTwo);

		x.appendChild(div);

		var val = Number($j('#quantityNew').val());
		val = val + 1;
		$j('#quantityNew').val(val);
		$j('#quan').html($j('#quantityNew').val());
		$j('#newQuantityHidden').val($j('#quantityNew').val());
		var w = $j('#unit').val();
		var sum = w * val;
		$j('#price').html("$"+sum);
		$j('#sub').val(sum);
		$j('#newTotalHidden').val(sum);

	}

	function takeAway(value){

		var x = document.getElementById(value);

		if(x){
			var y = document.getElementById('display');

			y.removeChild(x);
	
		}			
		
	}	


$j('#buyNow').on("click", function(event){
	
	var y = document.getElementsByTagName("SELECT");

	

	for(var i = 0; i < y.length; i++){

		if(y[i].selectedIndex === 0){
			
			y[i].className = "border";
			
		}else if(y[i].selectedIndex != 0){
			y[i].className = "";
		}
	}

	var w = document.getElementsByClassName("border");

	if(w.length == 0){
		$j('#newCart').submit();
	}else{
		event.preventDefault();
	}
	
});

$j('#addToCart').on("click", function(event){
	
	var y = document.getElementsByTagName("SELECT");

	

	for(var i = 0; i < y.length; i++){

		if(y[i].selectedIndex === 0){
			
			y[i].className = "border";
			
		}else if(y[i].selectedIndex != 0){
			y[i].className = "";
		}
	}

	var w = document.getElementsByClassName("border");

	if(w.length == 0){
		$j('#newCart').submit();
	}else{
		event.preventDefault();
	}
	
});


</script>





<?php
get_footer();