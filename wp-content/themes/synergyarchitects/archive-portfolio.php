<?php get_header(); ?>
	<article role="main" class="main" id="page-<?php the_ID(); ?>">

		<div class="main-standout">
			<div class="wrap">

				<h1>Portfolio</h1>

			</div><!-- .wrap -->
		</div><!-- .main-standout -->

		<div class="main-content">
			<div class="wrap">

				<div class="portfolio-home">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'portfolio-sectors',
							'container' => 'div',
							'container_class' => 'menu-sectors-container',
							'menu_class' => 'portfolio-sectors',
							'depth' => '1',
							'fallback_cb' => false
						)
					);
					?>
				</div>

			</div><!-- .wrap -->
		</div><!-- .main-content -->

		<?php //comments_template( '', true ); ?>

	</article><!-- .main -->
<?php get_footer(); ?>