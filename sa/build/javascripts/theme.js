$(document).ready(function() {

	// Based on http://www.micahcarrick.com/change-image-with-jquery.html
	$('.gallery-item a').on("click", function(e) {
		$('#gallery-main img').hide();
		var i = $('<img />').attr('src',this.href).load(function() {
			$('#gallery-main img').attr('src', i.attr('src'));
			$('#gallery-main img').show();
		});
		e.preventDefault();
	});

});
