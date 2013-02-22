<?php get_header(); ?>
	<article role="main" class="main" id="page-<?php the_ID(); ?>">

		<div class="main-standout">
			<div class="wrap">

				<h1>News</h1>

			</div><!-- .wrap -->
		</div><!-- .main-standout -->

		<div class="main-content">
			<div class="wrap">

				<div class="blog-main">
					<?php get_template_part( 'loop' ); ?>
				</div>
				
				<?php get_sidebar(); ?>

			</div><!-- .wrap -->
		</div><!-- .main-content -->

		<?php //comments_template( '', true ); ?>

	</article><!-- .main -->
<?php get_footer(); ?>