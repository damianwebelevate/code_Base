<?php header('X-Robots-Tag: noindex,nofollow'); ?>
<?php session_start(); 

// little check to see if there is a receipt in the session if so unset it

if(isset($_SESSION['receipt'])){
	unset($_SESSION['receipt']);
}


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
								<div class="numberTwo"><img src="https://triplecrowncustom.com/wp-content/themes/triple/img/tick.PNG" /></div>
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
								<div class="numberTwo"><img src="https://triplecrowncustom.com/wp-content/themes/triple/img/tick.PNG" /></div>
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
								<div class="numberTwo"><img src="https://triplecrowncustom.com/wp-content/themes/triple/img/tick.PNG" /></div>
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
								<div style="float: right;" class="number">4</div>
							</div>
								
						<div style="clear: both;"></div>		
						<div style="float: right; position: relative; left: 30px;" class="textBox">
							Checkout
						</div>
					</div>
				</li>
			</ul>';

// var_dump($_POST);

?>

<?php
if (!is_dir(dirname(__FILE__) . "/orders/")) {
  echo "App not setup. Please create orders directory.";
  exit();
}

$total = $_SESSION['total'] ? $_SESSION['total'] : 100;
// $total = isset($_POST['total']) ? $_POST['total'] : 100;

$us_state_abbrevs_names = array(
	'AL'=>'ALABAMA',
	'AK'=>'ALASKA',
	'AZ'=>'ARIZONA',
	'AR'=>'ARKANSAS',
	'CA'=>'CALIFORNIA',
	'CO'=>'COLORADO',
	'CT'=>'CONNECTICUT',
	'DE'=>'DELAWARE',
	'DC'=>'DISTRICT OF COLUMBIA',
	'FM'=>'FEDERATED STATES OF MICRONESIA',
	'FL'=>'FLORIDA',
	'GA'=>'GEORGIA',
	'GU'=>'GUAM GU',
	'HI'=>'HAWAII',
	'ID'=>'IDAHO',
	'IL'=>'ILLINOIS',
	'IN'=>'INDIANA',
	'IA'=>'IOWA',
	'KS'=>'KANSAS',
	'KY'=>'KENTUCKY',
	'LA'=>'LOUISIANA',
	'ME'=>'MAINE',
	'MH'=>'MARSHALL ISLANDS',
	'MD'=>'MARYLAND',
	'MA'=>'MASSACHUSETTS',
	'MI'=>'MICHIGAN',
	'MN'=>'MINNESOTA',
	'MS'=>'MISSISSIPPI',
	'MO'=>'MISSOURI',
	'MT'=>'MONTANA',
	'NE'=>'NEBRASKA',
	'NV'=>'NEVADA',
	'NH'=>'NEW HAMPSHIRE',
	'NJ'=>'NEW JERSEY',
	'NM'=>'NEW MEXICO',
	'NY'=>'NEW YORK',
	'NC'=>'NORTH CAROLINA',
	'ND'=>'NORTH DAKOTA',
	'MP'=>'NORTHERN MARIANA ISLANDS',
	'OH'=>'OHIO',
	'OK'=>'OKLAHOMA',
	'OR'=>'OREGON',
	'PA'=>'PENNSYLVANIA',
	'PR'=>'PUERTO RICO',
	'RI'=>'RHODE ISLAND',
	'SC'=>'SOUTH CAROLINA',
	'SD'=>'SOUTH DAKOTA',
	'TN'=>'TENNESSEE',
	'TX'=>'TEXAS',
	'UT'=>'UTAH',
	'VT'=>'VERMONT',
	'VI'=>'VIRGIN ISLANDS',
	'VA'=>'VIRGINIA',
	'WA'=>'WASHINGTON',
	'WV'=>'WEST VIRGINIA',
	'WI'=>'WISCONSIN',
	'WY'=>'WYOMING',
	'CAN'=>'CANADA',
);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tripple Crown Custom</title>

		<!--[if lt IE 9]>
	<script src="https://triplecrowncustom.com/wp-content/themes/twentyfourteen/js/html5.js"></script>
	<![endif]-->
	<link rel="icon" href="https://triplecrowncustom.com/wp-content/themes/triple/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="https://triplecrowncustom.com/wp-content/themes/triple/img/apple-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="https://triplecrowncustom.com/wp-content/themes/triple/img/apple-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="https://triplecrowncustom.com/wp-content/themes/triple/img/apple-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="https://triplecrowncustom.com/wp-content/themes/triple/img/apple-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="https://triplecrowncustom.com/wp-content/themes/triple/img/apple-icon-228x228.png" />
	
	<link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' type="text/css" />
	
	<link rel="stylesheet" href='https://triplecrowncustom.com/wp-content/themes/twentyfourteen/style.css?ver=4.4.1' type="text/css" />

	<link rel="stylesheet" href='https://triplecrowncustom.com/wp-content/themes/triple/style.css?ver=4.4.1' type="text/css" />

	<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700' type="text/css" />

	<link rel="stylesheet" href='https://triplecrowncustom.com/wp-content/themes/triple/css/main.css' type="text/css" />

	<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600' type="text/css" />

	<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Great+Vibes' type="text/css" />


	<style>

	*{
		font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	}

	h2, h3, h4, h5, label, input{
		font-family: 'Open Sans';
	}

	h2{
		color: #B8A14F;
		font-weight: normal;
	}

	fieldset{
		padding: 12px;
		border-color: #B8A14F;
	}

	.textBox {
	    width: 135px;
	    padding-left: 30px;
	    height: 100%;
	    text-align: center;
	    color: #0D416E;
	    font-size: 1em;
	    font-weight: 600;
	    line-height: 1;
	}

	.number {
	    padding-top: 2px;
	    position: relative;
	    border: 2px solid #0D416E;
	    border-radius: 100%;
	    line-height: 1.6;
	    width: 45px;
	    height: 45px;
	    text-align: center;
	    color: #fff;
	    background: #0D416E;
	    font-weight: 600;
	    font-size: 1.5em;
	}

	.h2, h2 {
	    font-size: 30px;
	}

	</style>



	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</head>
<body>

<div class="container-fluid navy2">
		<div class="wrapper">
			<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 navy2">
				<div class="row">
					<div class="col-xs-6 col-md-2 col-lg-2 col-sm-6">
						<!-- social media icons -->
						<!-- <div class="social visible-lg visible-md hidden-sm hidden-xs">
						  <a href="https://www.facebook.com/TripleCrownCustom" target="_blank"><img src="https://triplecrowncustom.com/wp-content/themes/triple/img/facebook.png" width="32" title="Triple Crown Custom on Facebook" alt="Triple Crown Custom on Facebook"/></a>
						  <a href="https://www.twitter.com/TripleCrownCustom" target="_blank"><img src="https://triplecrowncustom.com/wp-content/themes/triple/img/twitter.png" width="32" title="Triple Crown Custom on Twitter" alt="Triple Crown Custom on Twitter"/></a>
						  <a href="https://www.youtube.com/user/triplecrowncustom" target="_blank"><img src="https://triplecrowncustom.com/wp-content/themes/triple/img/youtube.png" width="32" title="Triple Crown Custom on Youtube" alt="Triple Crown Custom on Youtube"/></a>
						</div> -->
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<header class="header">
							<a href="https://triplecrowncustom.com/" rel="home">
								<img class="image" src="https://triplecrowncustom.com/wp-content/themes/triple/img/tcc-logo.png"  alt="Triple Crown Custom">
							</a>
						</header>
					</div>
					<div class="col-xs-6 col-md-2 col-lg-2 col-sm-6 pull-right">
						<nav class="pull-right" id="top"></nav>
					</div>
				</div>
			</div><!-- /close col-xs-12 etc -->
		</div><!-- /close wrapper -->
	</div> <!-- /close container-fluid -->



	<div class="container-fluid gold">
		<div class="wrapper">
			<div class="col-xs-12 gold">
				<nav style="float: left;" id="primary-navigation" class="site-navigation primary-navigation navigation" role="navigation">
					<div class="gold button_holder">
						<button class="menu-toggle">Primary Menu</button>
					</div>
					<a class="screen-reader-text skip-link" href="#content">Skip to content</a>
					<div class="menu-main-container"><ul id="primary-menu" class="nav-menu">
<li id="menu-item-1249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1249"><a href="https://triplecrowncustom.com/">Home</a></li>
<li id="menu-item-1250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1250"><a href="https://triplecrowncustom.com/about-us/">About Us</a></li>
<li id="menu-item-1256" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1256"><a href="https://triplecrowncustom.com/products-list/">Products List</a></li>
<li id="menu-item-1251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1251"><a href="https://triplecrowncustom.com/award-blankets/">Award Blankets</a></li>
<li id="menu-item-1253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1253"><a href="https://triplecrowncustom.com/our-riders/">Our Riders</a></li>
<li id="menu-item-1254" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1254"><a href="https://triplecrowncustom.com/sponsorshop/">Sponsorship</a></li>
<li id="menu-item-1252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1252"><a href="https://triplecrowncustom.com/contact-us/">Contact Us</a></li>
</ul></div>				</nav>
			</div>
		</div><!-- /close wrapper -->
	</div> <!-- /close container-fluid -->

		<!-- end of the head area -->
		<!-- start of the body -->

	<!-- already declaired in header.php: -->

		<div style="background-color: #ffffff;" class="wrapper">
			<div class="container-fluid">
				<div id="main-content" class="main-content">


	<div style="background-color: #fff; overflow: auto; margin: 0; padding: 0; display: block; width: 100%; min-height: 100px;">
		<?php echo $breadCrumb; ?>
	</div>

	<h1 style="font-weight: normal; font-size: 36px;" class="title">Payment Details</h1>


	<form name="frmStep3" id="frmStep3" action="step_4.php" method="POST">

<!-- 	<div class="col-xs-4">
	  	<fieldset class="form-group">
	  		<label for="total">Sub total (Ex. Shipping): </label>
			<input type="text" name="total" readonly value="<?php echo $total;?>">
		</fieldset>
	</div>
	<div class="col-xs-4">
	  	<fieldset class="form-group">
			<label for="fee">Shipping Fee</label>
			<input type="text" readonly name="fee" value="">
		</fieldset>
	</div>
	<div class="col-xs-4">
		<fieldset class="form-group">
			<label for "totalPlusFee">Total To Pay: </label>
			<input type="text" readonly name="totalPlusFee" id="totalPlusFee" value="">
		</fieldset>
	</div> -->


		<?php foreach ($_POST as $key => $value): ?>
		<input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>">
		<?php endforeach;?>


		<h2>Contact Details </h2>

		<div class="col-xs-6">
	  		<fieldset class="form-group">
			    <label for="customer_firstname">First Name *</label>
			    <input type="text" autofocus id="customer_firstname" name="customer_firstname" placeholder="First name" class="required" required>
	  		</fieldset>
  		</div>
		<div class="col-xs-6">
			<fieldset class="form-group">
			    <label for="customer_surname">Surname *</label>
			    <input type="text" id="customer_surname" name="customer_surname" placeholder="Surname" class="required" required>
	  		</fieldset>
  		</div>

		<div class="col-xs-6">
  			<fieldset class="form-group">
		    	<label for="customer_email">Email *</label>
		    	<input type="email" id="customer_email" name="customer_email" placeholder="Email address" class="required" required>
  			</fieldset>
  		</div>

  		<div class="col-xs-6">
  			<fieldset class="form-group">
		    	<label for="customer_phone">Phone *</label>
		    	<input type="text" id="customer_phone" name="customer_phone" placeholder="Contact Number" class="required" required>
  			</fieldset>
  		</div>

		<h2>Billing Address</h2>

				<div class="col-xs-4">
  		<fieldset class="form-group">
  			<label for="customer_billing_address_line_1">Address *</label>
			<input type="text" id="customer_billing_address_line_1" name="customer_billing_address_line_1" placeholder="Address line 1" class="required" required>
		</fieldset>
		</div>

		<div class="col-xs-4">
			<fieldset class="form-group"><label for="customer_billing_address_line_2">Address Line 2 (optional)</label>
				<input type="text" id="customer_billing_address_line_2" name="customer_billing_address_line_2" placeholder="Address line 2">
			</fieldset>
		</div>

		<div class="col-xs-4">
			<fieldset class="form-group"><label for="customer_billing_address_city">City *</label>
				<input type="text" id="customer_billing_address_city" name="customer_billing_address_city" placeholder="City" class="required" >
			</fieldset>
		</div>

		<div class="row"></div>

		<div class="col-xs-4">
			<fieldset class="form-group"><label for="customer_billing_address_country">Country *</label>
				<select style="display: block;" id="customer_billing_address_country" name="customer_billing_address_country" class="required" required>
					<option value="">Please select</option>
					<option value="USA">USA</option>
					<option value="CAN">Canada</option>
				</select>
			</fieldset>
		</div>

		<div class="col-xs-4">
			<fieldset class="form-group"><label for="customer_billing_address_state">State *</label>
				<select style="display: block;" id="customer_billing_address_state" name="customer_billing_address_state" class="required" required>
					<option value="">Please select</option>
					<?php foreach ($us_state_abbrevs_names as $code => $name): ?>
					<option value="<?php echo $code;?>"><?php echo $name;?></option>
					<?php endforeach;?>
				</select>
			</fieldset>
		</div>

		<div class="col-xs-4">
			<fieldset class="form-group"><label for="customer_billing_address_zipcode">Zip Code (5 digit)</label>
				<input type="text" id="customer_billing_address_zipcode" name="customer_billing_address_zipcode" placeholder="Zip Code" class="required" required>
			</fieldset>
		</div>

		<div class="col-xs-6">
			<fieldset class="form-group">
				<input type="checkbox" name="shipping_equals_billing" id="shipping_equals_billing"> Shipping address is same as billing address?
			</fieldset>
		</div>

		<h2>Shipping Address</h2>
			<div class="col-xs-4">
			<fieldset class="form-group"><label for="customer_shipping_address_line_1">Address</label>
				<input type="text" id="customer_shipping_address_line_1" name="customer_shipping_address_line_1" placeholder="Address line 1" class="required" required>
			</fieldset>
		</div>

		<div class="col-xs-4">
				<fieldset class="form-group"><label for="customer_shipping_address_line_2">Address Line 2 (optional)</label>
				<input type="text" id="customer_shipping_address_line_2" name="customer_shipping_address_line_2" placeholder="Address line 2">
			</fieldset>
		</div>

		<div class="col-xs-4">
				<fieldset class="form-group"><label for="customer_shipping_address_city">City</label>
				<input type="text" id="customer_shipping_address_city" name="customer_shipping_address_city" placeholder="City" class="required">
			</fieldset>
		</div>	

		<div class="row>"></div>

		<div class="col-xs-4">
			<fieldset class="form-group"><label for="customer_shipping_address_country">Country</label>					
				<select style="display: block;" id="customer_shipping_address_country" name="customer_shipping_address_country" class="required" required>
					<option value="">Please select</option>
					<option value="USA">USA</option>
					<option value="CAN">Canada</option>
				</select>					
			</fieldset>
		</div>

		<div class="col-xs-4">
			<fieldset class="form-group"><label for="customer_shipping_address_state">State</label>				
				<select style="display: block;" id="customer_shipping_address_state" name="customer_shipping_address_state" class="required" required>
					<option value="">Please select</option>
					<?php foreach ($us_state_abbrevs_names as $code => $name): ?>
					<option value="<?php echo $code;?>"><?php echo $name;?></option>
					<?php endforeach;?>
				</select>
			</fieldset>
		</div>	

		<div class="col-xs-4">
			<fieldset class="form-group"><label for="customer_shipping_address_zipcode">Zip Code (5 digit)</label>
				<input type="text" id="customer_shipping_address_zipcode" name="customer_shipping_address_zipcode" placeholder="Zip Code" class="required">
			</fieldset>
		</div>

		<h2>Credit Card Details</h2>
	
	<span class='payment-errors'></span>

		<div class="col-xs-6">
			<fieldset class="form-group">
				<label for="customer_cc_fullname">Name on card</label>
				<input type="text" id="customer_cc_fullname" name="customer_cc_fullname" placeholder="Name on card" class="required" required>
			</fieldset>
		</div>

		<div class="col-xs-6">
			<fieldset class="form-group">
				<label for="customer_cc_number">Card number</label>
				<input type="text" id="customer_cc_number" placeholder="Card number" class="required" data-stripe="number" required>
			</fieldset>
		</div>

		<div class="col-xs-4">
			<fieldset class="form-group">
				<label for="customer_cc_cvc">CVC</label>
				<input type="text" id="customer_cc_cvc" placeholder="Card code" data-stripe="cvc">
			</fieldset>
		</div>

		<div class="col-xs-4">
			<fieldset class="form-group">
				<label for="customer_cc_exp_month">Exp. Month (MM)</label>
				<input type="text" id="customer_cc_exp_month" placeholder="MM" class="required" data-stripe="exp-month" required>
			</fieldset>
		</div>

		<div class="col-xs-4">
			<fieldset class="form-group">
				<label for="customer_cc_exp_year">Exp. Year (YYYY)</label>
				<input type="text" id="customer_cc_exp_year" placeholder="YYYY" class="required" data-stripe="exp-year" required>
			</fieldset>
		</div>



		<div class="row>"></div>

	<div class="col-xs-4">
	  	<fieldset class="form-group">
	  		<label for="total">Sub total (Ex. Shipping): </label>
			<input type="text" name="total" readonly value="<?php echo $total;?>">
		</fieldset>
	</div>
	<div class="col-xs-4">
	  	<fieldset class="form-group">
			<label for="fee">Shipping Fee</label>
			<input type="text" readonly name="fee" value="">
		</fieldset>
	</div>
	<div class="col-xs-4">
		<fieldset class="form-group">
			<label for "totalPlusFee">Total To Pay: </label>
			<input type="text" readonly name="totalPlusFee" id="totalPlusFee" value="">
		</fieldset>
	</div>

<div class="row>"></div>

		<div class="col-xs-6">
			<fieldset style="padding: 17px;" class="form-group">
				<input type="checkbox" style="float: right;" name="customer_confirm_payment" id="customer_confirm_payment" class="required"> Please charge my card
			</fieldset>
		</div>

		<div class="col-xs-6">
			<fieldset class="form-group">
				<span class="loading"><img src="../img/ajax-loader.gif"> <span class="loadingText">Please wait...</span></span>
					<button style="float: right;" type="submit">Pay Now</button>
			</fieldset>
		</div>

	</form>

			</div><!-- /close col-xs-12 etc -->
		</div><!-- /close wrapper -->
	</div> <!-- /close container-fluid -->

<footer id="colophon" class="site-footer white" role="contentinfo">
			<div class="wrapper">

				<div class="container-fluid white">
						
					<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">

					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						<h2 class="footer_text">Our Quality, Your Style</h2>
						<div class="social">
							<a class="social_fb" target="_blank" href="https://www.facebook.com/TripleCrownCustom"></a>
							<a class="social_insta" target="_blank" href="https://www.instagram.com/triplecrowncustom/"></a>
							<a class="social_yt" target="_blank" href="https://www.youtube.com/user/triplecrowncustom"></a>
						</div>
						<p style="text-align: center; margin-top: 10px; color: #B8A14F;">Copyright &copy; <?php echo date("Y"); ?> <strong>Triple Crown Custom</strong></p>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
						
					</div>

				</div>	

			</div><!-- /wrapper -->
</footer><!-- #colophon -->


</body>

<script>
$( document ).ready(function() {

	$(".loading").hide();
	$("#customer_shipping_address_state, #customer_billing_address_state").on('change', function(evt) {
		var state = '';
		if ($("#shipping_equals_billing").is(':checked')) {
			state = $("#customer_shipping_address_state").val();
		} else {
			state = $("#customer_billing_address_state").val();
		}
		var value = $("input[name=total]").val();
		if (state && value) {
			$.ajax({
				url: 'shipping_fees.php',
				data: 'state=' + state + '&value=' + value,
				dataType: 'json',
				type: 'GET',
				success: function(json) {
					var total = $("input[name=total]").val();
					var fee   = json.fee;
					$("#totalPlusFee").val(+total + +fee);
					$("input[name=fee]").val(fee);
				},
			});
		}
	});

	$("#shipping_equals_billing").on('click', function(evt) {
		if ($(this).is(':checked')) {
			$("#customer_shipping_address_line_1").val($("#customer_billing_address_line_1").val());
			$("#customer_shipping_address_line_2").val($("#customer_billing_address_line_2").val());
			$("#customer_shipping_address_city").val($("#customer_billing_address_city").val());
			$("#customer_shipping_address_state").val($("#customer_billing_address_state").val());
			$("#customer_shipping_address_zipcode").val($("#customer_billing_address_zipcode").val());
			$("#customer_shipping_address_country").val($("#customer_billing_address_country").val());
		} else {
			$("#customer_shipping_address_line_1").val('');
			$("#customer_shipping_address_line_2").val('');
			$("#customer_shipping_address_city").val('');
			$("#customer_shipping_address_state").val('');
			$("#customer_shipping_address_zipcode").val('');
			$("#customer_shipping_address_country").val('');
		}
	});

	$("#customer_billing_address_country").on('change', function(evt) {
		var country = $(this).val();
		if (country == 'CAN') {
			$("#customer_billing_address_state").val('CAN');
			$("#customer_billing_address_state").change();
		} else {
			$("#customer_billing_address_state").val('');
			$("#customer_billing_address_state").change();
		}
	});

	$("#customer_shipping_address_country").on('change', function(evt) {
		var country = $(this).val();
		if (country == 'CAN') {
			$("#customer_shipping_address_state").val('CAN');
			$("#customer_shipping_address_state").change();
		} else {
			$("#customer_shipping_address_state").val('');
			$("#customer_shipping_address_state").change();
		}
	});

	$(".required").blur( function(evt){
		var val = $(this).val();
		if (val === '') {
			$(this).css('border-color', '#F10000');
		} else {
			$(this).css('border-color', '');
		}
	});
});
</script>

<script type="text/javascript">

	Stripe.setPublishableKey('pk_live_UAKqCgDJ6icGzuEy4Y90JX7z');

	var stripeResponseHandler = function(status, response) {
 		var $form = $('#frmStep3');
		if (response.error) {
			// Show the errors on the form
			$form.find('.payment-errors').text(response.error.message);
			$form.find('button').prop('disabled', false);
		} else {
			// token contains id, last4, and card type
			var token = response.id;
			// Insert the token into the form so it gets submitted to the server
			$form.append($('<input type="hidden" name="stripeToken" />').val(token));
			// and re-submit
			if ($("#customer_confirm_payment").is(':checked')) {
				$form.find('button').prop('disabled', false);
				$(".loading").show();
				$(".required").css('border-color', '');
				var errorsFound = 0;
				$(".required").each(function(evt){
					var val = $(this).val();
					if (val==='') {
						$(this).css('border-color', '#F10000');
						errorsFound++;
					}
				});

				if (errorsFound > 0) {
					$form.find('button').prop('disabled', false);
					$(".loading").hide();
					return false;
				} else {
					var data = $("form[name=frmStep3]").serialize();
					$.ajax({
						url: 'step_4.php',
						data: data,
						type: 'POST',
						dataType: 'json',
						success: function(json) {
							if (json.error == 1) {
								alert(json.message);
								$form.find('button').prop('disabled', false);
								$(".loading").hide();
							} else {
								// Damian add URL to thankyou page here
								location.href = "https://triplecrowncustom.com/thank-you";
							}
						},
						error: function(evt) {
							$form.find('button').prop('disabled', false);
							$(".loading").hide();
						}
					})
				}
			} else {
				alert('Please check the "Confirm Payment" checkbox');
				$form.find('button').prop('disabled', false);
				$(".loading").hide();
			}
   	}
 	};

	jQuery(function($) {
		$('#frmStep3').submit(function(e) {
			var $form = $(this);

			// Disable the submit button to prevent repeated clicks
			$form.find('button').prop('disabled', true);

			Stripe.card.createToken($form, stripeResponseHandler);

			// Prevent the form from submitting with the default action
			return false;
		});
	});
</script>

</html>
