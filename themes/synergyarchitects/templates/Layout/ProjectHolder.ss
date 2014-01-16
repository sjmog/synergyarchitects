<div class="main" role="main">
	<div class="wrap">
		<article class="content">

			<% include Photos %>

			<% if $Children %>
				<ul class="thumbnails">
					<% loop $Children %>
						<% include ProjectTeaser %>
					<% end_loop %>
				</ul>
			<% end_if %>

			<% if $Content %>
				<div class="copy">
					$Content
				</div>
			<% end_if %>

			

		</article><!-- .content -->

		<% include SideBar %>

	</div><!-- .wrap -->
</div><!-- .main -->