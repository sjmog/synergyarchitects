<div class="sidebar">
	<% if $Menu(2) %>
		<nav class="secondary">
			<% with $Level(1) %>
				<h2>$MenuTitle</h2>

				<ul>
					<% include SidebarMenu %>
				</ul>
			<% end_with %>
		</nav>
	<% end_if %>
</div><!-- .sidebar -->