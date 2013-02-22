<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
	<article role="main" class="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="main-standout">
			<div class="wrap">

				<h1><?php the_title(); ?></h1>
				<p class="lede"><? echo sa_standout_excerpt(); ?></p>
				<p>Posted: <?php the_date(); ?> <?php printf( __( 'in %s', 'sa' ), get_the_category_list( ', ' ) ); ?>.</p>

			</div><!-- .wrap -->
		</div><!-- .main-standout -->

		<div class="main-content">
			<div class="wrap">

				<div class="blog-main">
					<div class="entry">
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} ?>
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div><!--end entry-->

					<?php comments_template( '', true ); ?>
				</div>

				<?php get_sidebar(); ?>

			</div><!-- .wrap -->
		</div><!-- .main-content -->

	</article><!-- .main -->
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	<?php endif; ?>
<?php get_footer(); ?>