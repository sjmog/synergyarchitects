<?php if ( have_posts() ) : ?>

	<ul class="portfolio-list">
		<?php while ( have_posts() ) : the_post(); ?>
			<li>
				<div id="post-<?php the_ID(); ?>" <?php post_class('loop-portfolio'); ?>>
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'portfolio-loop' ); ?></a>
					<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</div><!--end post-->
			</li>
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	</ul>

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