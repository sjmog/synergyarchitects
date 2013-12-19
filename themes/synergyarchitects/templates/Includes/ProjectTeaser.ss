<li>
	<div class="flip-container" ontouchstart="this.classList.toggle('hover');">		
		<div class="flipper">
			
		
			<div class="one">
				<% loop $Photos.Limit(1) %>
					$CroppedImage(200,200)
				<% end_loop %>
			</div>
			<div class="two">
				<h2><a href="$Link" title="Read more on &quot;{$Title}&quot;" class="readmore"><span></span>$Title</a></h2>
				<p>$Content.FirstSentence</p>
			</div>

			
		</div>
	</div>
</li>