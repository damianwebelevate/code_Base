<?php session_start(); ?>
<?php

function generateFormToken($form) {
    
   // generate a token from an unique value
	$token = hash('sha256', uniqid(microtime(),true));
	// $token = md5(uniqid(microtime(), true));  
	
	// Write the generated token to the session variable to check it against the hidden field when the form is sent
	$_SESSION[$form.'_token'] = $token; 
	
	return $token;

}

$value = generateFormToken("Single Product");

?>
<?php
/**
 *  
 * Single Post Template: Product Post
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<form id="getProductSelected" method="post" action="<?php echo get_stylesheet_directory_uri() ?>/site/getselectedproduct.php">
				<input id="getValue" type="hidden" value="" name="rugSelection" />
				<input type="hidden" value="Stablewear" name="category" />
				<input type="hidden" value="<?php echo $value; ?>" name="token" />
			</form>


			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// Previous/next post navigation.
					twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->



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
