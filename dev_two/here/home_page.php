<?php

/*
*
* Template Name: Home Page
**  This file is part of Triple Crown Custom - TCC

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


/* landing page for the create rug */


get_header(); ?>

<?php 


session_start();


unset($_SESSION['receipt']);

if(!(isset($_SESSION['Cart']))){
	$cart = array();
	$cartNumbers = array("None");
	$receipt = array("None");
	$order = array("None");
	$thumb = array("None");
	$subTotal = array("None");
	$keys = array('Cart Number', "Receipt", "Order", "Thumb", "Subtotal");
	$values = array($cartNumbers, $receipt, $order, $thumb, $subTotal);

	function array_fillkeys($keyArray, $valueArray) {
	  if(is_array($keyArray)) {
	      foreach($keyArray as $key => $value) {
	          $filledArray[$value] = $valueArray[$key];
	        }
	    }
	          return $filledArray;
	}

	$cart = array_fillKeys($keys, $values);

	$_SESSION['Cart'] = $cart;

}



?>


<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
			<section class="container-fluid">
				<div style="border-radius: 0px;" class="jumbotron homepage_jumbo">
					<div class="container-fluid mobileMarginTop">
						<h1 class="calltoaction">create your own blanket</h1>
						<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 margin_top">
							<a href="http://dev.triplecrowncustom.com/dev/products-list/" rel="indexfollow" title="Stable Collection">
								<div class="readmore navy2 cta">
									Product Selection
								</div>
							</a>
						</div>

					</div>
				</div>
			</section>
			<section class="container-fluid">
				<div class="col-sm-4 col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 nopadding mobileMarginTop">
					<a href="http://dev.triplecrowncustom.com/dev/our-riders/">
					<div class="thumbnail">
						<img title="Triple Crown Custom | Our Riders" src="<?php echo get_stylesheet_directory_uri(); ?>/img/our-riders.jpg" alt="Triple Crown Custom | Our Riders" />
						<div class="caption">
							<h1>Our Riders</h1>
						</div>
					</div>
					</a>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 nopadding">
					<a href="http://dev.triplecrowncustom.com/dev/products-list/">
					<div class="thumbnail">
						<img title="Triple Crown Custom | New Products" src="<?php echo get_stylesheet_directory_uri(); ?>/img/new-products.jpg" alt="Triple Crown Custom | New Products" />
						<div class="caption">
						<h1>New Products</h1>
					</div>
				</div>
				</a>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0 col-lg-offset-0 col-sm-offset-0 nopadding">
					<a href="?page_id=33">
					<div class="thumbnail">
						<img title="Triple Crown Custom | Sponsorship" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sponsorship.jpg" alt="Triple Crown Custom | Sponsorship" />
						<div class="caption">
						<h1>Sponsorships</h1>
						</div>
					</div>
					</a>
				</div>
			</section>
		<!-- 
		</div>should be wrapper-->
	<!-- 
	</div>should be container -->
<!-- 
</div>should be site main -->



		


<?php
get_footer();



