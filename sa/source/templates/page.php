<?php get_header(); ?>
	<?php the_post(); ?>

	<article role="main" class="main" id="page-<?php the_ID(); ?>">

		<div class="main-standout">
			<div class="wrap">

				<?php if (!is_front_page()): ?>
					<h1><?php the_title(); ?></h1>
				<? endif; ?>
				<?php the_block('Standout') ?>

			</div><!-- .wrap -->
		</div><!-- .main-standout -->

		<div class="main-content">
			<div class="wrap">

				<?php the_content(); ?>

			</div><!-- .wrap -->
		</div><!-- .main-content -->

		<?php //comments_template( '', true ); ?>

	</article><!-- .main -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>