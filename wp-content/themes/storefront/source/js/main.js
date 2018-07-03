(function($) {

$(document).ready(function(){
	$("#slider").responsiveSlides({
	  	auto: true,
	  	nav: true,
	  	speed: 500,
	    namespace: "callbacks",
	    pager: true,
    });

    $('.starbox').each(function() {
		var starbox = jQuery(this);
			starbox.starbox({
			average: starbox.attr('data-start-value'),
			changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
			ghosting: starbox.hasClass('ghosting'),
			autoUpdateAverage: starbox.hasClass('autoupdate'),
			buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
			stars: starbox.attr('data-star-count') || 5
			}).bind('starbox-value-changed', function(event, value) {
			if(starbox.hasClass('random')) {
			var val = Math.random();
			starbox.next().text(' '+val);
			return val;
			} 
		})
	});

    $('#example1').coreSlider({
	  pauseOnHover: false,
	  interval: 3000,
	  controlNavEnabled: true
	});
});
	
 
 

})(jQuery);



