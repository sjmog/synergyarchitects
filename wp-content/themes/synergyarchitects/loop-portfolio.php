<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class('loop'); ?>>
			<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php echo do_shortcode(get_the_excerpt()); ?>
		</div><!--end post-->

	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

		<div class="pagination index">
			<div class="alignleft">
				<?php previous_posts_link( __( '&larr; Newer entries', 'sa' )); ?>
			</div>
			<div class="alignright">
				<?php next_posts_link( __( 'Older entries &rarr;', 'sa' )); ?>
			</div>
		</div><!--end pagination-->

	<?php else : ?>
<?php endif; ?>