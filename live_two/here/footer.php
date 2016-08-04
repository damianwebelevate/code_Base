<?php
?>		


	
		</div><!-- should be wrapper -->
	</div><!-- should be container -->
</div><!-- should be site main -->
		<footer id="colophon" class="site-footer whiteFooter" role="contentinfo">
			<div class="wrapper">
				<?php get_sidebar( 'footer' ); ?>

			
				<div style="padding: 0;" class="container-fluid whiteFooter">
						
					<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
					<ul class="footerMenu">
						<li><a href="https://triplecrowncustom.com/products-list/" title="All Products">All Products</a></li>
						<li><a href="https://triplecrowncustom.com/color-guide/" title="Triple Crown Custom Color Guide">Color Guide</a></li>
						<li><a href="https://triplecrowncustom.com/size-guide/" title="Triple Crown Custom Size Guide">Size Guide</a></li>
						<li><a href="https://triplecrowncustom.com/contact-us/" rel="nofollow" title="Contact Us Today">Contact Us</a></li>
					</ul>
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
						<?php echo do_shortcode( ' [dotmailer-signup showtitle=1 showdesc=0 redirection="/"]' ); ?>
					</div>

				</div>
			</div><!-- /wrapper -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>