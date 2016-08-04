<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>

<?php
/*
*
* Template Name: Ring_side 
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


/* landing page for the categories page ringside

	need to capture the id of the product and to capture the name of the product into a session and here is the first page
	so you need to generate a cookie here and set some values in it

 */


get_header(); ?>

<!-- 
already declaired in header.php:
<div id="main" class="site-main">
	<div class="container-fluid">
		<div class="wrapper"> -->
			<form id="getProductSelected" method="post" action="<?php echo get_stylesheet_directory_uri() ?>/site/getselectedproduct.php">
				<input id="getValue" type="hidden" value="" name="rugSelection" />
				<input type="hidden" value="Ringside" name="category" />
			</form>

			<div id="main-content" class="main-content">
				<div id="content" class="site-content" role="main">

					<h1 class="title">Ringside</h1>


					<ul class="category_list_ul">

					<li>
						<div class="category_list">
							<h3 class="title">Extended Neck Lined Rain Sheet</h3>
							<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/11/extended-neck-lined-rain-sheet_thumb.jpg" alt="extended-neck-lined-rain-sheet_thumb" />
							<h4>From: &#36;179.00</h4>
							<a class="nodec" id="Extended Neck Lined Rain Sheet" href='#' rel="nofollow" data='link' title="Select Rug" ><div class="readmore gold">Select Rug</div></a>
							<a href="#" rel="indexfollow" title="Read More" data-product_id="494" data-quantity="1"><div class="readmore light">Read More....</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3 class="title">Gulfstream net cooler</h3>
							<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/11/gulfstream_thumb2.jpg" alt="gulfstream_thumb" />
							<h4>From: &#36;169.00</h4>
							<a class="nodec" id="Gulfstream net cooler" href='#' rel="nofollow" data='link' title="Select Rug" ><div class="readmore gold">Select Rug</div></a>
							<a href="#" rel="indexfollow" title="Read More" data-product_id="264" data-quantity="1"><div class="readmore light">Read More....</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3 class="title">Hollywood cotton cooler</h3>
							<img class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/11/pimlico-wool_thumb2.jpg" alt="Hollywood cotton cooler" />
							<h4>From: &#36;145.00</h4>
							<a class="nodec" id="Hollywood cotton cooler" href='#' rel="nofollow" data='link' title="Select Rug" ><div class="readmore gold">Select Rug</div></a>
							<a href="#" rel="indexfollow" data-product_id="235" data-quantity="1"><div class="readmore light">Read More....</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3 class="title">Pimlico Wool Dress Sheet</h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/11/pimlico-wool_thumb2.jpg" class="image" alt="pimlico-wool_thumb" />
							<h4>From: &#36;295.00</h4>
							<a class="nodec" id="Pimlico Wool Dress Sheet" href='#' rel="nofollow" data='link' title="Select Rug" ><div class="readmore gold">Select Rug</div></a>
							<a href="#" rel="indexfollow" data-product_id="295" data-quantity="1"><div class="readmore light">Read More....</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3 class="title">Saddle Pad</h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/11/saddle-pad_thumb.jpg" class="image" alt="saddle-pad_thumb" /><h3>
							<h4>From: &#36;75.00</h4>		
							<a class="nodec" href='#' id="Saddle Pad" rel="nofollow" data='link' title="Select Rug" ><div class="readmore gold">Select Rug</div></a>
							<a href="#" rel="indexfollow" data-product_id="438" data-quantity="1"><div class="readmore light">Read More....</div></a>
						</div>
					</li>
					</ul>

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
		// alert($j(this).attr('id'));
		$j('#getValue').val($j(this).attr('id'));
		if($j('#getValue').val != "undefined"){
			$j('#getProductSelected').submit();
		}
	});

</script>
<?php
get_footer();


