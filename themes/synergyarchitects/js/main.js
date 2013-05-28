$(document).ready(function() {

	// allows for the styling of the first two words in the .standout text
	$(".standout").lettering('words');

	// powers the slider featured on multiple pages
	$('#slider').nivoSlider({
		effect: "fade",
		controlNav: false,
		animSpeed: 600,
		pauseTime: 6000,
		randomStart: true
	});


	// powers the slider featured on multiple pages
	$('#portfolio').nivoSlider({
		controlNavThumbs: true,
		effect: "fade",
		animSpeed: 600,
		pauseTime: 6000,
		manualAdvance: true
	});
});