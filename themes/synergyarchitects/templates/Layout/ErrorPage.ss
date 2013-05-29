<div role="main">
	<div class="main">
		<div class="wrap no-sidebar">
			<article class="content full">

				<% if $Photos %>
					<div class="slider-wrapper theme-default">
						<div id="slider" class="nivoSlider">
							<% loop $Photos %>
								$setWidth(950)
							<% end_loop %>
						</div>
					</div>
				<% end_if %>

			</article><!-- .content .full -->
		</div><!-- .wrap .no-sidebar -->
	</div><!-- .main -->

	<div class="main homepage-lower">
		<div class="wrap no-sidebar">
			<article class="content full">

				<h1>$Title</h1>
				$Content

			</article><!-- .content .full -->
		</div><!-- .wrap .no-sidebar -->
	</div><!-- .main -->
</div>