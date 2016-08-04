<?php
/*
*
* Template Name: Products_Page 
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

	landing page for all the products

*/

/*

session started with assigning the cart object on the home page
on this page the session only contains the cart as an array and the Product Selected_token

*/


get_header(); ?>


<?php session_start(); 


require (dirname(__FILE__).'/resources.php');

// include the file that will set up the session folder the same as the home page - just in case they don't go through the home page


// set up a cookie on the home page to mark the location of the folder that has been created
// depending on the length of time this value can be "trusted" if the user has cookies enabled
// do this check on the homepage and determine if cookies are enabled and alert user accordingly
// if it is set the path first element is the folder name and using that you can set the session id
// setting the session id will ensure that a particular customer uses the same directory and can retreive info from folder
// how long is this set for ????
// if its not set then ignore it and start the normal session

$value = generateFormToken("Product Selected");

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
			<form id="getProductSelected" method="post" action="<?php echo get_stylesheet_directory_uri() ?>/site/getselectedproduct.php">
				<input id="getValue" type="hidden" value="" name="rugSelection" />
				<input type="hidden" value="Stablewear" name="category" />
				<input type="hidden" value="<?php echo $value; ?>" name="token" />
			</form>

			<div id="main-content" class="main-content">
				<div id="content" class="site-content" role="main">

					<article>
						<header>
							<h1 class="title"><span></span>TCC Product List</h1>
						</header>


						<ul class="category_list_ul">

							<li>
								<div class="category_list">
									<h3>Pimlico Wool<br />Dress Sheet</h3>
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/pimlico.jpg" class="image" alt="Pimilco Wool Blanket" />
									<h4>From: &#36;295.00</h4>
									<a class="nodec" id="Pimlico_Wool_Dress_Sheet" title="Pimlico Wool Dress Sheet" rel="nofollow" data='link' ><div class="readmore gold">Customize</div></a>
									<a href="http://dev.triplecrowncustom.com/dev/pimlico-wool-dress-sheet/" rel="indexfollow" data-product_id="295" data-quantity="1"><div class="readmore light">Read More....</div></a>
								</div>
							</li>
							<li>
								<div class="category_list">
									<h3>Hollywood<br />Cotton Cooler</h3>
									<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/hollywood_cotton_cooler.jpg" alt="Hollywood Cotton Cooler Blanket" />
									<h4>From: &#36;145.00</h4>
									<a class="nodec" id="Hollywood_cotton_cooler" title="Hollywood cotton cooler" rel="nofollow" data='link' ><div class="readmore gold">Customize</div></a>
									<a href="http://dev.triplecrowncustom.com/dev/hollywood-cotton-cooler/" rel="indexfollow" data-product_id="235" data-quantity="1"><div class="readmore light">Read More....</div></a>
								</div>
							</li>
							<li>
								<div class="category_list">
									<h3 >Gulfstream<br />Net Cooler</h3>
									<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/03/gulf_stream_scrim_cooler_thumb.png" alt="Gulfstream Net Cooler Blanket" />
									<h4>From: &#36;169.00</h4>
									<a id="Gulfstream_net_cooler" title="Gulfstream net cooler" data='link' class="nodec" rel="nofollow" ><div class="readmore gold">Customize</div></a>
									<a href="http://dev.triplecrowncustom.com/dev/gulfstream-scrim-net-cooler/" rel="indexfollow" title="Read More" data-product_id="383" data-quantity="1"><div class="readmore light">Read More....</div></a>
								</div>
							</li>
							<li>
								<div class="category_list">
									<h3>Extended Neck<br />Lined Rain Sheet</h3>
									<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/extended_neck_lined_rain_sheet.jpg" class="image" alt="Extended Neck Lined Rain Sheet" />
									<h4>From: &#36;179.00</h4>
									<a id="Extended_Neck_Lined_Rain_Sheet" title="Extended Neck Lined Rain Sheet" data='link' class="nodec" rel="nofollow" ><div class="readmore gold">Customize</div></a>
									<a href="http://dev.triplecrowncustom.com/dev/extended-neck-lined-rain-sheet/" rel="indexfollow" data-product_id="207" data-quantity="1"><div class="readmore light">Read More....</div></a>
								</div>
							</li>
							<li>
								<div class="category_list">
									<h3>Santa Anita<br />Stable Sheet</h3>
									<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/santa_anita.jpg" alt="Santa Anita Stable Sheet Blanket" />
									<h4>From: &#36;189.00</h4>
									<a id="Santa_Anita_Stable_Sheet" title="Santa Anita Stable Sheet" data='link' class="nodec" rel="nofollow" ><div class="readmore gold">Customize</div></a>
									<a href="http://dev.triplecrowncustom.com/dev/santa-anita-stable-sheet-tcc/" rel="indexfollow" title="Read More" data-product_id="636" data-quantity="1"><div class="readmore light">Read More....</div></a>
								</div>
							</li>
							<li>
								<div class="category_list">
									<h3>200g Belmont<br />Stable Blanket</h3>
									<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/200_belmont_stable_rug.jpg" alt="200 Belmont Stable Blanket" />
									<h4>From: &#36;249.00</h4>
									<a id="200g_Belmont_Stable_Rug" title="200g Belmont Stable Rug" data='link' class="nodec" rel="nofollow" ><div class="readmore gold">Customize</div></a>
									<a href="http://dev.triplecrowncustom.com/dev/200g-belmont-stable-blanket/" rel="indexfollow" data-product_id="646" data-quantity="1"><div class="readmore light">Read More....</div></a>
								</div>
							</li>
					
						</ul>
					</article>
				</div><!-- #content -->   
			</div><!-- #main-content -->
			<!-- 
		</div>should be wrapper -->
	<!-- 
	</div>should be container -->
<!-- 
</div>should be site main -->


<script>

	$j("[data='link']").on("click", function(){
		// alert($j(this).attr('title'));
		$j('#getValue').val($j(this).attr('title'));

		if($j('#getValue').val !== "undefined"){
			$j('#getProductSelected').submit();
		}
	});

</script>

<?php
get_footer();