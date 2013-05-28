<% if $Photos %>
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
			<% loop $Photos %>
				$setWidth(630)
			<% end_loop %>
		</div>
	</div>
<% end_if %>