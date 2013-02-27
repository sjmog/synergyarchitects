<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article role="main" class="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="main-standout">
					<div class="wrap">

						<h1><?php the_title(); ?></h1>
						<p class="lede"><?php the_field('introduction'); ?></p>

					</div><!-- .wrap -->
				</div><!-- .main-standout -->

				<div class="main-content">
					<div class="wrap">

						<div class="content">
							<?php the_content(); ?>

							<dl>
								<dt>Location</dt>
								<dd><?php the_field('location'); ?></dd>
							</dl>

							<?php wp_link_pages(); ?>
						</div>

						<?php get_sidebar('portfolio'); ?>

					</div><!-- .wrap -->
				</div><!-- .main-content -->

			</article><!-- .main -->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	<?php endif; ?>
<?php get_footer(); ?>