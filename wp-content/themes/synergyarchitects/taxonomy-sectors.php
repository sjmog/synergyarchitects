<?php get_header(); ?>
	<article role="main" class="main" id="page-<?php the_ID(); ?>">

		<div class="main-standout">
			<div class="wrap">

				<h1><?php single_tag_title(); ?></h1>

			</div><!-- .wrap -->
		</div><!-- .main-standout -->

		<div class="main-content">
			<div class="wrap">

				<div class="content">
					<?php if ( have_posts() ) : ?>
						<?php get_template_part( 'loop-portfolio' ); ?>
					<?php else : ?>
						<p><?php _e( 'No projects found.', 'sa' ); ?></p>
					<?php endif; ?>
				</div>

				<?php get_sidebar('portfolio'); ?>

			</div><!-- .wrap -->
		</div><!-- .main-content -->

		<?php //comments_template( '', true ); ?>

	</article><!-- .main -->
<?php get_footer(); ?>