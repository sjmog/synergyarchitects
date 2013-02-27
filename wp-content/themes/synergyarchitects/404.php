<?php get_header(); ?>
	<article role="main" class="main" id="page-<?php the_ID(); ?>">

		<div class="main-standout">
			<div class="wrap">

				<h1><?php _e( '404: Page Not Found', 'sa' ); ?></h1>

			</div><!-- .wrap -->
		</div><!-- .main-standout -->

		<div class="main-content">
			<div class="wrap">

				<p><?php _e( 'We are terribly sorry, but the URL you typed no longer exists. It might have been moved or deleted.', 'sa' ); ?></p>

			</div><!-- .wrap -->
		</div><!-- .main-content -->

		<?php //comments_template( '', true ); ?>

	</article><!-- .main -->
<?php get_footer(); ?>