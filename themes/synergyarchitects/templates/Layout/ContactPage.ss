<div class="main" role="main">
	<div class="wrap">
		<article class="content">

			<% include Photos %>

			<%--<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Synergy+Architects,+Euston+Place,+Royal+Leamington+Spa&amp;aq=0&amp;oq=synergy+&amp;sll=52.285423,-1.527239&amp;sspn=0.082118,0.174923&amp;t=v&amp;ie=UTF8&amp;hq=Synergy+Architects,&amp;hnear=Euston+Pl,+Royal+Leamington+Spa,+United+Kingdom&amp;ll=52.288282,-1.534408&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>--%>
			<iframe width="100%" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Synergy+Architects,+Euston+Place,+Royal+Leamington+Spa&amp;aq=0&amp;oq=synergy+&amp;sll=52.285423,-1.527239&amp;sspn=0.082118,0.174923&amp;t=m&amp;ie=UTF8&amp;hq=Synergy+Architects,&amp;hnear=Euston+Pl,+Royal+Leamington+Spa,+United+Kingdom&amp;ll=52.290016,-1.533816&amp;spn=0.005906,0.013089&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>

		</article><!-- .content -->

		<div class="sidebar">
			<h2>$Title</h2>

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

		</div><!-- .sidebar -->

	</div><!-- .wrap -->
</div><!-- .main -->