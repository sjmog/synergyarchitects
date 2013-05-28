<nav role="navigation" class="header-navigation">
	<ul class="header-links">
		<% loop $Menu(1) %>
			<li class="$LinkingMode"><a href="$Link" title="$Title.XML">$MenuTitle.XML</a></li>
		<% end_loop %>
	</ul><!-- .header-links -->
</nav><!-- .header-navigation -->