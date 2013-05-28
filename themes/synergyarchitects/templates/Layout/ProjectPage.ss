<div class="main" role="main">
	<div class="wrap">
		<article class="content">

			<% if $Photos %>
				<div class="slider-wrapper theme-default">
					<div id="portfolio" class="nivoSlider">
						<% loop $Photos %>
							<img src="{$SetWidth(630).URL}" data-thumb="{$CroppedImage(120,120).URL}" alt="" />
						<% end_loop %>
					</div>
				</div>
			<% end_if %>

			<div class="copy">
				<h1>$Title</h1>
			</div>

			<% if $Content %>
				<div class="copy">
					$Content
				</div>
			<% end_if %>

		</article><!-- .content -->

		<% include SideBar %>

	</div><!-- .wrap -->
</div><!-- .main -->