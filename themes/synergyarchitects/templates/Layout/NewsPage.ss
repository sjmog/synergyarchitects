<div class="main" role="main">
	<div class="wrap">
		<article class="content">

			<% include Photos %>

			<div class="copy">
				<h1>$Title</h1>
				<p>Posted on $Date.Full</p>
			</div>

			<% if $Content %>
				<div class="copy">
					$Content
				</div>
			<% end_if %>

		</article><!-- .content -->

		<% include NewsBar %>

	</div><!-- .wrap -->
</div><!-- .main -->