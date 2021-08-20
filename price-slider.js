//-----JS for Price Range slider-----

$(function() {
	$( "#slider-range" ).slider({
	  range: true,
	  min: 50,
	  max: 2000,
	  values: [ 750, 1200 ],
	  slide: function( event, ui ) {
		$( "#amount" ).val("Your budget: " + "£" + ui.values[ 0 ] + " - $£" + ui.values[ 1 ] );
	  }
	});
	$("#amount" ).val("Your budget: " + " £" + $( "#slider-range" ).slider( "values", 0 ) +
	  " - £" + $( "#slider-range" ).slider( "values", 1 ) );
});