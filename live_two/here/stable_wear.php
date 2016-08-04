<?php header('X-Robots-Tag: noindex,nofollow'); ?>
<?php
/*
*
* Template Name: Stable_Wear 
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
				<input type="hidden" value="Stablewear" name="category" />
			</form>

			<div id="main-content" class="main-content">
				<div id="content" class="site-content" role="main">

					<h1 class="title">Stablewear</h1>


					<ul class="category_list_ul">

					<li>
						<div class="category_list">
							<h3  class="title">Belmont Quilted Stable Blanket - Medium</h3>
							<img style="margin-top: 10px;" class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/11/belmont-400g_thumb1.jpg" alt="extended-neck-lined-rain-sheet_thumb" />
							<h4>From: &#36;180.00</h4>
							<a id="Belmont Quilted Stable Blanket" data='link' class="nodec" href='#' rel="nofollow" title="Select Rug" ><div class="readmore gold">Select Rug</div></a>
							<a href="#" rel="indexfollow" title="Read More" data-product_id="383" data-quantity="1"><div class="readmore light">Read More....</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3 class="title">200G BELMONT STABLE RUG</h3>
							<img style="margin-top: 10px;" class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2016/01/thumb.png" alt="200G BELMONT STABLE RUG" />
							<h4>From: &#36;249.00</h4>
							<a id="200g Belmont Stable Rug" data='link' class="nodec" href='#' rel="nofollow" title="Select Rug" ><div class="readmore gold">Select Rug</div></a>
							<a href="#" rel="indexfollow" title="Read More" data-product_id="636" data-quantity="1"><div class="readmore light">Read More....</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3 class="title">Meadowlands 400g Stable Blanket</h3>
							<img style="margin-top: 10px;" class="image" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/11/belmont-400g_thumb.jpg" alt="belmont-400g_thumb" />
							<h4>From: &#36;180.00</h4>
							<a id="Meadowlands 400g Stable Blanket" data='link' class="nodec" href='#' rel="nofollow" title="Select Rug" ><div class="readmore gold">Select Rug</div></a>
							<a href="#" rel="indexfollow" data-product_id="646" data-quantity="1"><div class="readmore light">Read More....</div></a>
						</div>
					</li>
					<li>
						<div class="category_list">
							<h3 class="title">Santa Anita Stable Sheet</h3>
							<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2015/11/santa-anita_thumb1.jpg" class="image" alt="Santa Anita Stable Sheet" />
							<h4>From: &#36;180.00</h4>
							<a id="Santa Anita Stable Sheet" data='link' class="nodec" href='#' rel="nofollow" title="Select Rug" ><div class="readmore gold">Select Rug</div></a>
							<a href="#" rel="indexfollow" data-product_id="207" data-quantity="1"><div class="readmore light">Read More....</div></a>
						</div>
					</li>
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
		if($j('#getValue').val !== "undefined"){
			$j('#getProductSelected').submit();
		}
	});

</script>

<?php
get_footer();