<?php header("Access-Control-Allow-Origin: *"); ?>
<?php
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-icon-228x228.png" />

	
	<?php wp_head(); ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50760667-4', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>


	<div class="container-fluid navy2">
		<div class="wrapper">
			<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 navy2">
				<div class="row">
					<div class="col-xs-6 col-md-2 col-lg-2 col-sm-6">
						
					</div>
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<header class="header">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img class="image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tcc-logo.png"  alt="<?php echo esc_attr( get_bloginfo( "name", "display" ) ); ?>">
							</a>
						</header>
					</div>
					<div class="col-xs-6 col-md-2 col-lg-2 col-sm-6 pull-right">
						<nav class="pull-right" id="top"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
					</div>
				</div>
			</div><!-- /close col-xs-12 etc -->
		</div><!-- /close wrapper -->
	</div> <!-- /close container-fluid -->

	<div class="container-fluid gold">
		<div class="wrapper">
			<div class="col-xs-12 gold">
				<nav id="primary-navigation" class="site-navigation primary-navigation navigation" role="navigation">
					<div class="gold button_holder">
						<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
					</div>
					<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>
			</div>
		</div><!-- /close wrapper -->
	</div> <!-- /close container-fluid -->

		<!-- end of the head area -->
		<!-- start of the body -->

	<div id="main" class="site-main">
		<div class="container-fluid">
			<div class="wrapper">
		

