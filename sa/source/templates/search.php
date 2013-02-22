<?php get_header(); ?>
	<article role="main" class="main" id="page-<?php the_ID(); ?>">

		<div class="main-standout">
			<div class="wrap">

				<h1><?php printf( __( "Search results for '%s'", "sa" ), get_search_query() ); ?></h1>

			</div><!-- .wrap -->
		</div><!-- .main-standout -->

		<div class="main-content">
			<div class="wrap">

				<div class="blog-main">
					<?php if ( have_posts() ) : ?>
						<?php get_template_part( 'loop' ); ?>
					<?php else : ?>
						<p><?php printf( __( 'Sorry, your search for "%s" did not turn up any results. Please try again.', 'sa' ), get_search_query());?></p>
						<?php get_search_form(); ?>
					<?php endif; ?>
				</div>

				<?php get_sidebar(); ?>

			</div><!-- .wrap -->
		</div><!-- .main-content -->

		<?php //comments_template( '', true ); ?>

	</article><!-- .main -->
<?php get_footer(); ?>