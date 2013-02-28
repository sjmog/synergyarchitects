<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
	<?php the_post(); ?>

	<article role="main" class="main" id="page-<?php the_ID(); ?>">

		<div class="main-standout">
			<div class="wrap">

				<h1><?php the_title(); ?></h1>
				<?php the_field('content'); ?>

			</div><!-- .wrap -->
		</div><!-- .main-standout -->

		<div class="main-content">
			<div class="wrap">

				<div class="contact_form">
					<?php the_content(); ?>
				</div>
				<div class="contact_map">
					<?php the_field('map'); ?>
				</div>

			</div><!-- .wrap -->
		</div><!-- .main-content -->

		<?php //comments_template( '', true ); ?>

	</article><!-- .main -->

<?php get_footer(); ?>