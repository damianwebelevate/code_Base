<?php
?>		


			
		</div><!-- should be wrapper -->
	</div><!-- should be container -->
</div><!-- should be site main -->
		<footer id="colophon" class="site-footer whiteFooter" role="contentinfo">
			<div class="wrapper">
				<?php get_sidebar( 'footer' ); ?>

<?php wp_nav_menu( array( 'footer-menu' => 'Footer Menu' ) ); ?>

				<div class="container-fluid whiteWhite">
						
					<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">

					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
						<h2 class="footer_text">Our Quality, Your Style</h2>
						<div class="social">
							<a class="social_fb" target="_blank" href="https://www.facebook.com/TripleCrownCustom"></a>
							<a class="social_tw" target="_blank" href="https://twitter.com/Triplecrowncust"></a>
							<a class="social_yt" target="_blank" href="https://www.youtube.com/user/triplecrowncustom"></a>
						</div>
						<p style="text-align: center; margin-top: 10px; color: #B8A14F;">Copyright &copy; <?php echo date("Y"); ?> <strong>Triple Crown Custom</strong></p>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
						
					</div>

				</div>

		
					

			</div><!-- /wrapper -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>