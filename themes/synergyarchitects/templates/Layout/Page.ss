<div class="main" role="main">
	<div class="wrap">
		<article class="content">

			<% include Photos %>

			<div class="copy">
				<h1>$Title</h1>
			</div>

			<% if $Content %>
				<div class="copy">
					$Content
				</div>
			<% end_if %>

			<% if $Form %>
				<div class="form">
					$Form
				</div>
			<% end_if %>

		</article><!-- .content -->

		<% include SideBar %>

	</div><!-- .wrap -->
</div><!-- .main -->