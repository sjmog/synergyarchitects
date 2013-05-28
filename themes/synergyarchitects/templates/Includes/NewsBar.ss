<div class="sidebar">
	<% if $Menu(2) %>
		<nav class="newslist">
			<% with $Level(1) %>
				<h2>$MenuTitle</h2>
				<ul>

					<% if LinkOrSection = section %>
						<% if $Children %>
							<% loop $Children %>
								<li class="$LinkingMode">
									<div class="datebox">
										<span class="month">{$Date.ShortMonth}</span>
										<span class="year">{$Date.Year}</span>
									</div>
									<div class="linkbox">
										<a href="$Link" class="$LinkingMode" title="Go to the $Title.XML page"><span></span>{$MenuTitle.XML}</a>
									</div>
								</li>
							<% end_loop %>
						<% end_if %>
					<% end_if %>

				</ul>
			<% end_with %>
		</nav>
	<% end_if %>
</div><!-- .sidebar -->