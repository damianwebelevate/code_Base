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
* Template Name: Contact Us
*
*/

get_header(); ?>
<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
			<div class="container-fluid">
				<div id="main-content" class="main-content">
					<div id="content" class="site-content" role="main">
						<div class="contact">
						<h1 class="title">Contact Us Today</h1>
							<p>At Triple Crown Custom we strive to offer the best customer service experience. Creating your personalized blanket or garment is important to us.</p>

							<p>If at any point during your order placement you have a question please feel free to contact us.</p>
							<p class="goldText"><strong>** Pricing and colors are subject to change</strong></p>

							<h4 class="goldText">Shipping Information</h4>
							<p>Our bespoke products take 4-6 weeks to be delivered to your door from the day the order is placed. All orders will be shipped UPS Ground, unless otherwise specified in your order.</p>

							<p>A confirmation email detailing your order number, summary and confirmation will be emailed to you at the conclusion on your order.</p>

							<p><strong><em>Please note the order cannot be changed after this point.</em></strong></p>
							<h3 class="goldText">CONTACT OUR TEAM</h3>
							<p>Call today with your enquiry: <br /><br /><a title="(+1) 800-887-6688" href="tel:+18008876688">(+1) 800-887-6688</a> <br /><br />Email: </p>

							<a style="display: block; width: 370px; margin: 20px 0px;" class="readmore gold" id="info" href="info@triplecrowncustom.com" title="Contact Us for more information">info&#64;triplecrowncustom.com</a>
							<h4 class="goldText">Sales Team USA</h4>
							<p>Call Jeanette Bruce at: <br /><br />
							<a href="tel:+12529331356" title="(+1) 252-933-1356">(+1) 252-933-1356</a><br /><br />Email: </p>
							<a style="display: block; width: 370px; margin: 20px 0px;" class="readmore gold" id="salesAmerica" title="Sales America" href="jeanette.bruce@triplecrowncustom.com" >jeanette.bruce&#64;triplecrowncustom.com</a>
							<h4 class="goldText">Sales Team Europe</h4>
							<p>Call Poppy Blandford at:<br /><br />
							<a href="tel:+353429389078" title="+353 42 9389078">+353 42 9389078</a><br /><br />Email: </p>

							<a style="display: block; width: 370px; margin: 20px 0px;" class="readmore gold" id="salesEurope" title="Sales Europe Enquiry" href="poppy.blandford@triplecrowncustom.com">poppy.blandford&#64;triplecrowncustom.com</a>



						</div>

						<script>
							
							$j('#info, #salesAmerica, #salesEurope').on("click", function(){
								var email = $j(this).attr("href");
								var subject = $j(this).attr("title");
								var mailto_link = 'mailto:'+email+'?subject='+subject;
								// window.location.href = mailto_link;
								$j(this).attr("href", mailto_link);
							});

						</script>

					</div> <!-- #site-content -->
				</div><!-- #main-content -->
			</div><!-- container-fluid -->
			<!-- 
		</div>should be wrapper -->
	<!-- 
	</div>should be container -->
<!-- 
</div>should be site main -->
<?php
get_footer();

?>

