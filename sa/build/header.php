<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes( 'html' ) ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes( 'html' ) ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes( 'html' ) ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes( 'html' ) ?>> <!--<![endif]-->
<head>
	<title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="author" href="/humans.txt" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

	<div class="background">

		<header role="banner" class="header">
			<div class="wrap">

				<div class="header-title">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" /></a>
				</div><!-- .header-title -->

				<nav role="navigation" class="header-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'top-menu',
							'container' => false,
							'menu_class' => 'header-links',
							'depth' => '1',
							'fallback_cb' => false
						)
					);
					?>
				</nav><!-- .header-navigation -->

			</div><!-- .wrap -->
		</header><!-- .header -->

	</div><!-- .background-->