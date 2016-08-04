<?php 
session_start(); 




function generateFormToken($form) {
    
   // generate a token from an unique value
	// $token = md5(uniqid(microtime(), true));  
	$token = hash('sha256', uniqid(microtime(),true));
	// Write the generated token to the session variable to check it against the hidden field when the form is sent
	$_SESSION[$form.'_token'] = $token; 
	
	return $token;

}

$value = generateFormToken("Product Selected");


unset($_SESSION['receipt']);
unset($_SESSION['total']);

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

get_header(); ?>

<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
			<form id="getProductSelected" method="post" action="//triplecrowncustom.com/wp-content/themes/triple/site/getselectedproduct.php">
				<input id="getValue" type="hidden" value="" name="rugSelection" />
				<input type="hidden" value="Stablewear" name="category" />
				<input type="hidden" value="<?php echo $value; ?>" name="token" />
			</form>

			<div id="main-content" class="main-content">
				<!-- <div id="content" class="site-content" role="main"> -->

					<h1 class="title">TCC Product List</h1>


					<ul class="category_list_ul">
					<li>
						<div class="category_list">
							<h3>Pimlico Wool<br />Dress Sheet</h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/pimlico.jpg" class="image" alt="pimlico-wool_thumb" />
							<h4>From: &#36;295.00</h4>
							<a class="nodec" id="Pimlico_Wool_Dress_Sheet" title="Pimlico Wool Dress Sheet" rel="nofollow" data='link' ><div class="readmore gold">Customize</div></a>
							<a href="https://triplecrowncustom.com/pimlico-wool-dress-sheet/" rel="indexfollow" title="More Information" data-product_id="295" data-quantity="1"><div class="readmore light">More Information</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3>Hollywood<br />Cotton Cooler</h3>
							<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/hollywood_cotton_cooler_thumbnail.jpg" alt="pimlico-wool_thumb" />
							<h4>From: &#36;145.00</h4>
							<a class="nodec" id="Hollywood_cotton_cooler" title="Hollywood cotton cooler" rel="nofollow" data='link' ><div class="readmore gold">Customize</div></a>
							<a href="https://triplecrowncustom.com/hollywood-cotton-cooler/" rel="indexfollow" title="More Information" data-product_id="235" data-quantity="1"><div class="readmore light">More Information</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3 >Gulfstream<br />Net Cooler</h3>
							<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2016/03/gulf_stream_scrim_cooler_thumb.png" alt="Gulfstream Net Cooler image" />
							<h4>From: &#36;169.00</h4><a id="Gulfstream_net_cooler" title="Gulfstream net cooler" data='link' class="nodec" rel="nofollow" ><div class="readmore gold">Customize</div></a>
							<a href="https://triplecrowncustom.com/gulfstream-scrim-net-cooler/" rel="indexfollow" title="More Information" data-product_id="383" data-quantity="1"><div class="readmore light">More Information</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3>Extended Neck<br />Lined Rain Sheet</h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/extended_neck_lined_rain_sheet_thumbnail.jpg" class="image" alt="Santa Anita Stable Sheet" />
							<h4>From: &#36;179.00</h4>
							<a id="Extended_Neck_Lined_Rain_Sheet" title="Extended Neck Lined Rain Sheet" data='link' class="nodec" rel="nofollow" ><div class="readmore gold">Customize</div></a>
							<a href="https://triplecrowncustom.com/extended-neck-lined-rain-sheet/" rel="indexfollow" title="More Information" data-product_id="207" data-quantity="1"><div class="readmore light">More Information</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3>Santa Anita<br />Stable Sheet</h3>
							<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/santa_anita.jpg" alt="Santa Anita Stable Sheet image" />
							<h4>From: &#36;189.00</h4>
							<a id="Santa_Anita_Stable_Sheet" title="Santa Anita Stable Sheet" data='link' class="nodec" rel="nofollow" ><div class="readmore gold">Customize</div></a>
							<a href="https://triplecrowncustom.com/santa-anita-stable-sheet-tcc/" rel="indexfollow" title="More Information" data-product_id="636" data-quantity="1"><div class="readmore light">More Information</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3>200g Belmont<br />Stable Rug</h3>
							<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/03/200_belmont_stable_rug_thumbnail.jpg" alt="belmont-400g_thumb" />
							<h4>From: &#36;249.00</h4>
							<a id="200g_Belmont_Stable_Rug" title="200g Belmont Stable Rug" data='link' class="nodec" href='#' rel="nofollow" ><div class="readmore gold">Customize</div></a>
							<a href="https://triplecrowncustom.com/200g-belmont-stable-blanket/" rel="indexfollow" title="More Information" data-product_id="646" data-quantity="1"><div class="readmore light">More Information</div></a>
						</div>
					</li>
					
				</div><!-- #content -->   
			<!-- </div> --><!-- #main-content -->
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

		$j('#getProductSelected').submit();

	});

</script>

<?php
get_footer();