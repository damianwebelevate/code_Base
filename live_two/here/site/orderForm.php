<?php
session_start();

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
						<div style="width: 150px; padding-left: 5px;" class="textBoxTwo">
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
						<div style="font-weight: 600;" class="textBoxTwo">
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
						<div class="textBoxTwo">
							Order Summary
						</div>
					</div>
				</li>
				<li>
					<div style="float: right;" class="block">
						<div class="gapOne"></div>
							
							<div style="float: right;" class="third">
								<div style="float: right;" class="numberTwo">4</div>
							</div>
								
						<div style="clear: both;"></div>		
						<div style="float: right; position: relative; left: 30px;" class="textBoxTwo">
							Checkout
						</div>
					</div>
				</li>
			</ul>';
if (!is_dir(dirname(__FILE__) . "/orders/")) {
  echo "App not setup. Please create orders directory.";
  exit();
}

$total = isset($_SESSION['total']) ? $_SESSION['total'] : 100;
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
<?php 
/*
*
* Template Name: Order Form 
*/
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

get_header(); ?>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>


<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
		


<div class="breadTwoContainer">
		<?php echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>".$breadCrumb ."</div>"; ?>
	</div>

	<h1 class="title"><span></span>Payment Details</h1>


		<form name="frmStep3" id="frmStep3" action="step_4.php" method="POST">


			<?php foreach ($_POST as $key => $value): ?>
			<input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>">
			<?php endforeach;?>


			<h2 class="goldText" class="goldText">Contact Details </h2>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		  		<fieldset class="form-group">
				    <label for="customer_firstname">First Name *</label>
				    <input type="text" autofocus id="customer_firstname" name="customer_firstname" placeholder="First name" class="required" required>
		  		</fieldset>
	  		</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<fieldset class="form-group">
				    <label for="customer_surname">Surname *</label>
				    <input type="text" id="customer_surname" name="customer_surname" placeholder="Surname" class="required" required>
		  		</fieldset>
	  		</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	  			<fieldset class="form-group">
			    	<label for="customer_email">Email *</label>
			    	<input type="email" id="customer_email" name="customer_email" placeholder="Email address" class="required" required>
	  			</fieldset>
	  		</div>

	  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	  			<fieldset class="form-group">
			    	<label for="customer_phone">Phone *</label>
			    	<input type="text" id="customer_phone" name="customer_phone" placeholder="Contact Number" class="required" required>
	  			</fieldset>
	  		</div>

			<h2 class="goldText">Billing Address</h2>

					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	  		<fieldset class="form-group">
	  			<label for="customer_billing_address_line_1">Address *</label>
				<input type="text" id="customer_billing_address_line_1" name="customer_billing_address_line_1" placeholder="Address line 1" class="required" required>
			</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group"><label for="customer_billing_address_line_2">Address Line 2 (optional)</label>
					<input type="text" id="customer_billing_address_line_2" name="customer_billing_address_line_2" placeholder="Address line 2">
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group"><label for="customer_billing_address_city">City *</label>
					<input type="text" id="customer_billing_address_city" name="customer_billing_address_city" placeholder="City" class="required" >
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group"><label for="customer_billing_address_country">Country *</label>
					<select style="display: block;" id="customer_billing_address_country" name="customer_billing_address_country" class="required" required>
						<option value="">Please select</option>
						<option value="USA">USA</option>
						<option value="CAN">Canada</option>
					</select>
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group"><label for="customer_billing_address_state">State *</label>
					<select style="display: block;" id="customer_billing_address_state" name="customer_billing_address_state" class="required" required>
						<option value="">Please select</option>
						<?php foreach ($us_state_abbrevs_names as $code => $name): ?>
						<option value="<?php echo $code;?>"><?php echo $name;?></option>
						<?php endforeach;?>
					</select>
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group"><label for="customer_billing_address_zipcode">Zip Code (5 digit)</label>
					<input type="text" id="customer_billing_address_zipcode" name="customer_billing_address_zipcode" placeholder="Zip Code" maxlength="5" class="required" required>
				</fieldset>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<fieldset class="form-group">
					<input type="checkbox" name="shipping_equals_billing" id="shipping_equals_billing"> Shipping address is same as billing address?
				</fieldset>
			</div>

			<h2 class="goldText">Shipping Address</h2>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group"><label for="customer_shipping_address_line_1">Address</label>
					<input type="text" id="customer_shipping_address_line_1" name="customer_shipping_address_line_1" placeholder="Address line 1" class="required" required>
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<fieldset class="form-group"><label for="customer_shipping_address_line_2">Address Line 2 (optional)</label>
					<input type="text" id="customer_shipping_address_line_2" name="customer_shipping_address_line_2" placeholder="Address line 2">
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<fieldset class="form-group"><label for="customer_shipping_address_city">City</label>
					<input type="text" id="customer_shipping_address_city" name="customer_shipping_address_city" placeholder="City" class="required">
				</fieldset>
			</div>	

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group"><label for="customer_shipping_address_country">Country</label>					
					<select style="display: block;" id="customer_shipping_address_country" name="customer_shipping_address_country" class="required" required>
						<option value="">Please select</option>
						<option value="USA">USA</option>
						<option value="CAN">Canada</option>
					</select>					
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group"><label for="customer_shipping_address_state">State</label>				
					<select style="display: block;" id="customer_shipping_address_state" name="customer_shipping_address_state" class="required" required>
						<option value="">Please select</option>
						<?php foreach ($us_state_abbrevs_names as $code => $name): ?>
						<option value="<?php echo $code;?>"><?php echo $name;?></option>
						<?php endforeach;?>
					</select>
				</fieldset>
			</div>	

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group"><label for="customer_shipping_address_zipcode">Zip Code (5 digit)</label>
					<input type="text" id="customer_shipping_address_zipcode" name="customer_shipping_address_zipcode" placeholder="Zip Code" maxlength="5" class="required">
				</fieldset>
			</div>

			<h2 class="goldText">Credit Card Details</h2>
		
		<span class='payment-errors'></span>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<fieldset class="form-group">
					<label for="customer_cc_fullname">Name on card</label>
					<input type="text" id="customer_cc_fullname" name="customer_cc_fullname" placeholder="Name on card" maxlength="22" class="required" required>
				</fieldset>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<fieldset class="form-group">
					<label for="customer_cc_number">Card number</label>
					<input type="text" id="customer_cc_number" placeholder="Card number" class="required" data-stripe="number" required>
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group">
					<label for="customer_cc_cvc">CVC</label>
					<input type="text" id="customer_cc_cvc" placeholder="Card code" data-stripe="cvc">
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group">
					<label for="customer_cc_exp_month">Exp. Month (MM)</label>
					<input type="text" id="customer_cc_exp_month" placeholder="MM" class="required" maxlength="2" data-stripe="exp-month" required>
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group">
					<label for="customer_cc_exp_year">Exp. Year (YYYY)</label>
					<input type="text" id="customer_cc_exp_year" placeholder="YYYY" class="required" maxlength="4" data-stripe="exp-year" required>
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			  	<fieldset class="form-group">
			  		<label for="total">Sub total (Ex. Shipping): </label>
					<input type="text" name="total" readonly value="<?php echo $total;?>">
				</fieldset>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			  	<fieldset class="form-group">
					<label for="fee">Shipping Fee</label>
					<input type="text" readonly name="fee" value="">
				</fieldset>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<fieldset class="form-group">
					<label for "totalPlusFee">Total To Pay: </label>
					<input type="text" readonly name="totalPlusFee" id="totalPlusFee" value="">
				</fieldset>
			</div>


			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<fieldset style="padding: 17px;" class="form-group">
					<input type="checkbox" style="float: right;" name="customer_confirm_payment" id="customer_confirm_payment" class="required"> Please charge my card
				</fieldset>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<fieldset class="form-group">
					<span class="loading"><img src="https://triplecrowncustom.com/wp-content/themes/triple/img/ajax-loader.gif"> <span class="loadingText">Please wait...</span></span>
						<button style="float: right;" type="submit">Pay Now</button>
				</fieldset>
			</div>

		</form>


			</div><!-- /close col-xs-12 etc -->
		</div><!-- /close wrapper -->
	</div> <!-- /close container-fluid -->

<script>
$j( document ).ready(function() {

	$j(".loading").hide();
	$j("#customer_shipping_address_state, #customer_billing_address_state").on('change', function(evt) {
		var state = '';
		if ($j("#shipping_equals_billing").is(':checked')) {
			state = $j("#customer_shipping_address_state").val();
		} else {
			state = $j("#customer_billing_address_state").val();
		}
		var value = $j("input[name=total]").val();
		if (state && value) {
			$j.ajax({
				url: 'https://triplecrowncustom.com/wp-content/themes/triple/site/shipping_fees.php',
				data: 'state=' + state + '&value=' + value,
				dataType: 'json',
				type: 'GET',
				success: function(json) {
					var total = $j("input[name=total]").val();
					var fee   = json.fee;
					$j("#totalPlusFee").val(+total + +fee);
					$j("input[name=fee]").val(fee);
				},
			});
		}
	});

	$j("#shipping_equals_billing").on('click', function(evt) {
		if ($j(this).is(':checked')) {
			$j("#customer_shipping_address_line_1").val($j("#customer_billing_address_line_1").val());
			$j("#customer_shipping_address_line_2").val($j("#customer_billing_address_line_2").val());
			$j("#customer_shipping_address_city").val($j("#customer_billing_address_city").val());
			$j("#customer_shipping_address_state").val($j("#customer_billing_address_state").val());
			$j("#customer_shipping_address_zipcode").val($j("#customer_billing_address_zipcode").val());
			$j("#customer_shipping_address_country").val($j("#customer_billing_address_country").val());
		} else {
			$j("#customer_shipping_address_line_1").val('');
			$j("#customer_shipping_address_line_2").val('');
			$j("#customer_shipping_address_city").val('');
			$j("#customer_shipping_address_state").val('');
			$j("#customer_shipping_address_zipcode").val('');
			$j("#customer_shipping_address_country").val('');
		}
	});

	$j("#customer_billing_address_country").on('change', function(evt) {
		var country = $j(this).val();
		if (country == 'CAN') {
			$j("#customer_billing_address_state").val('CAN');
			$j("#customer_billing_address_state").change();
		} else {
			$j("#customer_billing_address_state").val('');
			$j("#customer_billing_address_state").change();
		}
	});

	$j("#customer_shipping_address_country").on('change', function(evt) {
		var country = $j(this).val();
		if (country == 'CAN') {
			$j("#customer_shipping_address_state").val('CAN');
			$j("#customer_shipping_address_state").change();
		} else {
			$j("#customer_shipping_address_state").val('');
			$j("#customer_shipping_address_state").change();
		}
	});

	$j(".required").blur( function(evt){
		var val = $j(this).val();
		if (val === '') {
			$j(this).css('border-color', '#F10000');
		} else {
			$j(this).css('border-color', '');
		}
	});
});
</script>

<script type="text/javascript">


Stripe.setPublishableKey('pk_live_UAKqCgDJ6icGzuEy4Y90JX7z');


	var stripeResponseHandler = function(status, response) {
 		var $form = $j('#frmStep3');
		if (response.error) {
			// Show the errors on the form
			$form.find('.payment-errors').text(response.error.message);
			$form.find('button').prop('disabled', false);
		} else {
			// token contains id, last4, and card type
			var token = response.id;
			// Insert the token into the form so it gets submitted to the server
			$form.append($j('<input type="hidden" name="stripeToken" />').val(token));
			// and re-submit
			if ($j("#customer_confirm_payment").is(':checked')) {
				$form.find('button').prop('disabled', false);
				$j(".loading").show();
				$j(".required").css('border-color', '');
				var errorsFound = 0;
				$j(".required").each(function(evt){
					var val = $j(this).val();
					if (val==='') {
						$j(this).css('border-color', '#F10000');
						errorsFound++;
					}
				});

				if (errorsFound > 0) {
					$form.find('button').prop('disabled', false);
					$j(".loading").hide();
					return false;
				} else {
					var data = $j("form[name=frmStep3]").serialize();


					$j.ajax({
						url: 'https://triplecrowncustom.com/wp-content/themes/triple/site/step_4.php',
						data: data,
						type: 'POST',
						dataType: 'json',
						success: function(json) {

							if (json.error == 1) {

								alert(json.message);
								$form.find('button').prop('disabled', false);
								$j(".loading").hide();
							} else {
								// Damian add URL to thankyou page here
								window.location.href = "https://triplecrowncustom.com/thank-you";
							}
						},
						error: function(evt) {
							$form.find('button').prop('disabled', false);
							$j(".loading").hide();
						}
					})
				}
			} else {
				alert('Please check the "Confirm Payment" checkbox');
				$form.find('button').prop('disabled', false);
				$j(".loading").hide();
			}
   	}
 	};

	$j(function($j) {
		$j('#frmStep3').submit(function(e) {

			var $form = $j(this);

			// Disable the submit button to prevent repeated clicks
			$form.find('button').prop('disabled', true);

			Stripe.card.createToken($form, stripeResponseHandler);

			// Prevent the form from submitting with the default action
			return false;
		});
	});
</script>





				</div><!--//// close site-content -->
			</div><!--//// close main-content -->
	</div><!--//// close wrapper-content -->


<?php
get_footer();